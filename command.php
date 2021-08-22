<!doctype html>
<html lang="en">
<?php
	include("connect.php");
	if(isset($_SESSION["u_id"]))
	{
		$sql = "SELECT state FROM user where uname='commision2021'";
		$result=mysqli_query($con,$sql);

		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$state="".$row["state"]."";
				
			}
		}
	}
	else
	{
		echo "<script>alert('ERROR')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
?>
<head>
	<meta charset="UTF-8">
	<title>Online Voting System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body style="background:#fff600">
	<div class="container-fluid">
		<div class="container" style="border:2px solid black;">
			<div class="row" style="background:#e29103">
				<div class="col-lg-2 col-sm-1 py-sm-3 py-2 text-center">
					<img id="logo1" src="images/logo_sm.png"/>
				</div>
				<div class="col-lg-8 col-sm-10 pt-sm-4 pt-1 text-center">
					<p id="header">Election  Commision  Portal</p>
				</div>
				<div class="col-lg-2 col-sm-1 pt-2 text-center">
					<img id="logo2" src="images/logo2_sm.png" class="float-right"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 px-0">
				
					<nav class="navbar navbar-light bg-light navbar-expand-md">
						<button class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="navbar-nav text-center" style="width:100%;">
								<li class="nav-item"><a href="commision.php" class="nav-link active">Command</a></li>
								<li class="nav-item"><a href="" class="nav-link ">Add</a>
									<ul class="sub-menu">
										<a href="add_v.php"><li class="py-2">Voter</li></a>
										<a href="add_c.php"><li class="py-2">Candidate</li></a>
									</ul>									
								</li>
								<li class="nav-item"><a href="" class="nav-link">Update</a>
									<ul class="sub-menu">
										<a href="update_v.php"><li class="py-2">Voter</li></a>
										<a href="update_c.php"><li class="py-2">Candidate</li></a>
									</ul>	
								</li>
								<li class="nav-item"><a href="" class="nav-link">Remove</a>
									<ul class="sub-menu">
										<a href="rem_v.php"><li class="py-2">Voter</li></a>
										<a href="rem_c.php"><li class="py-2">Candidate</li></a>
									</ul>	
								</li>
								<li class="nav-item"><a href="" class="nav-link">View</a>
									<ul class="sub-menu">
										<a href="view_v.php"><li class="py-2">Voter</li></a>
										<a href="view_c.php"><li class="py-2">Candidate</li></a>
									</ul>	
								</li>
								<li class="nav-item"><a href="result.php" class="nav-link">Result</a></li>
								<li class="nav-item"><a href="login.php" class="nav-link">Logout</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row pt-5 pb-4"  style="background:#fff;">
				<div class="col">
					<label for="">State</label>
					<p id="state" class="form-control"></p>
					<label for="">Date</label>
					<p id="date" class="form-control"></p>
				</div>
			</div>
			<div class="row pb-4" style="background:#fff;">
				<div class="col-md-4 py-sm-3">
					<a href="start_back.php"><button id="start" class="btn btn-success">Start Election</button></a>
				</div>
				<div class="col-md-4 py-sm-3">
					<a href="candidate_back.php"><button id="start" class="btn btn-info">Allow Candidates</button></a>
				</div>
				<div class="col-md-4 py-sm-3">
					<a href="stop_back.php"><button id="stop" class="float-right btn btn-danger">Stop Election</button></a>
				</div>				
			</div>								
		</div>
	</div>
	<div class="container-fluid footer">
		<p class="copyright text-center pt-2">Copyright@onlinevotingIndia2021</p>
	</div>
</body>

<script type="text/javascript">
var d=new Date();
document.getElementById("date").innerHTML=d;
</script>
	<?php 
		echo "<script>document.getElementById('state').innerHTML='$state'</script>";
	?>
</html>