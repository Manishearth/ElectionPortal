<?php
include('die.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0038)http://projects.wncc-iitb.org/physics/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Physics dept general elections, 2014</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://projects.wncc-iitb.org/physics/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://projects.wncc-iitb.org/physics/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://projects.wncc-iitb.org/physics/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="http://projects.wncc-iitb.org/physics/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="http://projects.wncc-iitb.org/physics/favicon.ico">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body style="">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="page-header">
				<h1>
					Physics dept general elections, 2014
				</h1>
			</div>
		</div>
	</div>
	<style>
	.pic{width:150px;align:center}</style>
	<form class="form-horizontal" role="form" 
action="submit.php" method="post">
	<div class="row" style="margin-top:20px;">
            <div class="col-md-3 column" style="text-align:center;">
                <img class="pic" src="img/pic1.png">
                <div class="panel callout radius">
                    <h4 style="font-weight:lighter;text-align:center">    
                           Candidate 1  <br>  
                            <a href="mani/name1.pdf">Manifesto</a>
			    <br><input type="radio" class="form-control" value="name1" name="selection">
                    </h4>
                </div>
            </div>
            <div class="col-md-3 column" style="text-align:center;">
                <img class="pic" src="img/name2.jpg">
                <div class="panel callout radius">
                    <h4 style="font-weight:lighter;text-align:center">    
                           Candidate 2<br>  
                            <a href="mani/name2.pdf">Manifesto</a>
			    <br><input type="radio" class="form-control" value="name2" name="selection">
                    </h4>
                </div>
            </div> 
            <div class="col-md-3 column" style="text-align:center;">
                <img class="pic" src="img/name3.jpg">
                <div class="panel callout radius">
                    <h4 style="font-weight:lighter;text-align:center">    
                           Candidate 3 <br>  
                            <a href="mani/name3.pdf">Manifesto</a>
			    <br><input type="radio" class="form-control" value="name3" name="selection">
                    </h4>
                </div>
            </div>
            <div class="col-md-3 column" style="text-align:center;">
                <img class="pic" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                <div class="panel callout radius">
                    <h4 style="font-weight:lighter;text-align:center">    
                           None  <br>  
			    <br><input type="radio" class="form-control" value="none" name="selection">
                    </h4>
                </div>
            </div>
        </div>
	<div class="row clearfix">
	  <div class="col-md-4 column"></div>
		<div class="col-md-6 column">
			
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-2 control-label">LDAP ID</label>
					<div class="col-sm-4">
						<input type="text" name="user" class="form-control" id="inputEmail3">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-4">
						<input type="password" name="pass" class="form-control" id="inputPassword3">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">Vote!</button>
					</div>
				</div>
			
		</div>
	</div>
	</form>
</div>


</body></html>
