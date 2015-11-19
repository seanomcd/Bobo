<?php
	session_start();
	if(isset($_SESSION['users'])!="")
{
	header("Location: verify.php");
}
	include_once '../includes/connectDB.php';
		
	$sql = 'SELECT user_id, fname, lname, username, email, DOB, phone FROM users';
	mysql_select_db ('../dbtest');
	$retval = mysql_query($sql, $conn);
	
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
	$row=mysql_fetch_array($res);	
	$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<meta name="description" content="verify">
    <meta name="author" content="Youcef">
    <link rel="icon" href="../images/BoboLogo.png"><!--picture on tab beside title-->

    <title>Bobo App</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this page -->

    <!-- Latest compiled and minified JavaScript -->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- AngularJS Link---->
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>-->
	
	
</head>

<body>

		<!--this is the code for the navbar-->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="verify.php">BoBo</a>
						
                </div>
                <div class="collapse navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="verify.php"data-toggle="collapse" data-target=".navbar-collapse">Home</a></li>
                        <li class="active"><a href="account.php" data-toggle="collapse" data-target=".navbar-collapse">Account</a></li>
                        <li><a href="settings.php" data-toggle="collapse" data-target=".navbar-collapse">Settings</a></li>
                    </ul>
					
					<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $userRow['username']; ?> <b class="caret"></b></a>
									<ul class="dropdown-menu">
										
										<li>&nbsp;<a href="logout.php?logout">Sign Out</a></li>
									</ul>
							</li>
						</ul>
                </div>
            </div>
			
        </nav>
	
	<div class="container">
		<div class="jumbotron">
			<div id="account">
				<form method="post">
				 <table class="table" ng-hide="!searchText.length" style="background-color:white; opacity:0.8; font-weight:bold; font-size:18px">
				 <tr>
				 <th colspan = "2"><h2> Account Information</h2></th>
				 </tr>
					<tr>
						<td>First Name: </td>
						<td><?php echo $row['fname']?></td>
					</tr>
					<tr>
					   <td>Last  Name: </td>
					   <td><?php echo $row['lname']?></td>
					</tr>
					<tr>
					   <td>Username: </td>
					   	<td><?php echo $row['username']?></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><?php echo $row['email']?></td>
					</tr>
				</table></br>
		
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				View Taxi history
			</button>
				
				</form>
			</div>
						
			<footer class="navbar-default navbar-fixed-bottom">
			<div class="container-fluid">
			<center>
				<span><p>Copyright &copy; <a href="bobo15@gmail.com" title="bobo15@gmail.com">bobo15@gmail.com</a></p></span>
			</center>
			</div>
	</footer>
			
		</div>	
			
	</div>	
        
         


	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	
	
	
	<!-- Bootstrap core JavaScript
	================================================= -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../javaScript/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../javaScript/ie10-viewport-bug-workaround.js"></script>
	
	<!--This is the Backstretch code which uses a jquery-->
			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script type="text/javascript" src="../jquery/jquery.backstretch.js"></script>
			<script type="text/javascript">
				$.backstretch(["../images/cab.jpg"]);
			</script>
	
 
 </body>
</html>