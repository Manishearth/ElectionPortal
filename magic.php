<?php
$user=$_REQUEST['user'];$pass=$_REQUEST['pass'];$selection=$_REQUEST['selection'];

$file_db = new PDO('sqlite:phy.db');
if($user =="" || $pass==""){
die("Please enter a username and password");
}

if(!in_array($selection,array('name1','name2','name3','none'))){
die("Please vote for a candidate, or choose 'none'");
}
function phy($str){
$str=strtoupper($str);
$init=array("12026","13026"); // What roll numbers start with
$rolls=array("12D070012","121030108","120111003","120500027"); // branch changes
$starts=array_merge($init,$rolls);
foreach($starts as $k => $v){
  if(strpos($str,$v)===0){
  return true;
  }
}
return false;
}

$fake=1;
$euser=urlencode($user);
$epass=urlencode($pass);
$url="http://reverse.proxy/ldap.php?user=$euser&pass=$epass";
$deets=file_get_contents($url);
if($deets=="NONE"){
die("Please enter a correct password");
}
$deets=explode("|",$deets);
$roll=$deets[0];
if(phy($roll)||strpos($deets[1],"ou=PHY")!==false){
$fake=0;
}
$stm=$file_db->prepare('select * from votes where ldap=:ldap;');
$stm->execute(array('ldap'=>$euser));
if($stm->fetch()!==false){
die ("You have already voted");
}


$stm=$file_db->prepare('insert into votes(ldap,roll,vote,fake) values(:ldap,:roll,:vote,:fake)');
$stm->execute(array('ldap'=>$euser,'roll'=>$roll,'vote'=>$selection,'fake'=>$fake));
if($fake==0){
echo "Thank you, your vote has been recorded.";
}else{
echo "We could not determine if you are from the physics department. 
Your vote has been recorded separately and will be reviewed before 
tallying.";
}
