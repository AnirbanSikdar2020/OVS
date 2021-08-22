<!doctype html>
<html lang="en">
<?php
	include("connect.php");
	unset($_SESSION["v_id"]);
	unset($_SESSION["u_id"]);
	unset($_SESSION["select_state"]);
?>
<head>
	<meta charset="UTF-8">
	<title>Online Voting System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	
</head>
<body style="background:#fff600">
	<div class="container-fluid" >
		<div class="container" style="border:2px solid black;">
			<div class="row justify-content-center"  style="background:#e29103">
				<div class="col-3 py-3">
					<a href="login.php"><img src="images/logo.png" /></a>
				</div>
			</div>
			<div class="row justify-content-center" style="background:#ffffff; border-top:2px solid black;">
				<div class="col py-4 text-center">
					<p id="title"><a href="index.php" style="text-decoration:none;">Online Voting System</a></p>
				</div>
			</div>
			
			<form method="post" action="login_back.php">
			<div class="row "  style="background:#058e1f; border-top:2px solid black;">
				<div class="col-md-6 pt-4 pb-5 text-center">
					<input class="login_input" type="text" name="uid" placeholder="Enter User Name" autofocus required />
					<br /><br />
					<input class="login_input" type="password" name="pwd" placeholder="Enter Password" required />
				</div>
				<div class="col-md-6 pt-5 pb-5">
					<button id="opt_button" class="btn float-right mr-5">Login</button>
				</div>
			</div>
			</form>
		</div>
	</div>
	<div class="container-fluid footer mt-3">
		<p class="copyright text-center pt-2">Copyright@onlinevotingIndia2021</p>
	</div>
	
	

</body>
</html>