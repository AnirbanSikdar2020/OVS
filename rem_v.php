<!doctype html>
<html lang="en">
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
	<div class="container-fluid pb-0" >
		<div class="container" style="border:2px solid black;">
			<div class="row" style="background:#e29103">
				<div class="col-lg-2 col-sm-1 py-sm-3 py-2 text-center">
					<img id="logo1" src="images/logo_sm.png"/>
				</div>
				<div class="col-lg-8 col-sm-10 pt-sm-4 pt-1 text-center">
					<p id="header">Election  Commision  Portal</p>
				</div>
				<div class="col-lg-2 col-sm-1 pt-2">
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
								<li class="nav-item"><a href="commision.php" class="nav-link">Command</a></li>
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
								<li class="nav-item"><a href="" class="nav-link  active">Remove</a>
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
			<div class="row pt-5 pb-sm-4"  style="background:#fff;">
				<div class="col">
				<h4 class="text-danger mb-4"><u>Remove Voter</u></h4>
					<form method="post" onsubmit="return validate()" action="rem_v_back.php">
						<div class="form-group">
							<label for="">Name<font color="red"> *</font></label>
							<input name="uname" type="text" id="name" class="form-control form-control">
							<span id="name_span"></span>
						</div>
						<div class="form-group">
							<label for="">Voter_id<font color="red"> *</font></label>
							<input name="voterid" type="text" id="vid" class="form-control form-control">
							<span id="voter_span"></span>
						</div>
						<div class="form-group">
							<label for="">Aadhar_id<font color="red"> *</font></label>
							<input name="aadhar" type="number" id="aid" class="form-control form-control">
							<span id="aadhar_span"></span>
						</div>
						<div class="form-group">
							<label for="">Date of Birth<font color="red"> *</font></label>
							<input name="dob" type="date" id="date" class="form-control form-control">
							<span id="dob_span"></span>
						</div>
						<div class="form-group pt-3">
							<button class="btn btn-primary" style="width:100%; height:50px;">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer">
		<p class="copyright text-center pt-2">Copyright@onlinevotingIndia2021</p>
	</div>


<script type="text/javascript">

	function validate()
	{
		var username = document.getElementById("name").value;
		var voter = document.getElementById("vid").value;
		var aadhar = document.getElementById("aid").value;
		var date = document.getElementById("date").value;
		
		if(username=="")
		{
			document.getElementById("name_span").innerHTML="User name cannot be blank";
			document.getElementById("name_span").style.color="red";
			document.getElementById("name_span").style.fontSize="15px";
			return false;
		}
		
		else if(voter=="")
		{
			document.getElementById("voter_span").innerHTML="voter Id cannot be blank";
			document.getElementById("voter_span").style.color="red";
			document.getElementById("voter_span").style.fontSize="15px"; 
			return false;
		}
		
		else if(aadhar=="")
		{
			document.getElementById("aadhar_span").innerHTML="Aadhar Number cannot be blank";
			document.getElementById("aadhar_span").style.color="red";
			document.getElementById("aadhar_span").style.fontSize="15px";
			return false;
		}
		
		else if(date=="")
		{
			document.getElementById("dob_span").innerHTML="D.O.B. cannot be blank";
			document.getElementById("dob_span").style.color="red";
			document.getElementById("dob_span").style.fontSize="15px";
			return false;
		}

		else
		{
			return true;
		}
	}
</script>
</body>
</html>