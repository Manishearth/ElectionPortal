<?php
if($_REQUEST['key']!='ehrenfest'){
die("Access denied");
}
$db = new PDO('sqlite:phy.db');
$sth = $db->prepare("SELECT COUNT(*) as count,vote from votes where fake = 0 group by vote;");
$sth->execute();
echo "Non-dubious votes:<br><table border>";
$a=$sth->fetchAll(PDO::FETCH_ASSOC);
foreach($a as $row){
echo "<tr><td>".$row['vote']."</td><td>". $row['count']."</td></tr>";
}
echo "</table><br><br> Dubious votes:";
$sth = $db->prepare("SELECT ldap,roll,vote from votes where fake = 1;");
$sth->execute();
echo "<table border><tr><td>LDAP</td><td>Roll 
number</td><td>Voted for</td></tr>";
$a=$sth->fetchAll(PDO::FETCH_ASSOC);
foreach($a as $row){
echo "<tr><td>".$row['ldap']."</td><td>". $row['roll']."</td><td>". 
$row['vote']."</td> </tr>";
}
echo "</table>";

