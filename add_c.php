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
								<li class="nav-item"><a href="" class="nav-link  active">Add</a>
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
			<div class="row pt-5 pb-sm-4"  style="background:#fff;">
				<div class="col">
				<h4 class="text-danger mb-4"><u>Candidate Registration</u></h4>
					<form method="post" onsubmit="return validate()" action="reg.php" enctype="multipart/form-data">
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
						<div class="form-group">
							<label for="">City<font color="red"> *</font></label>
							<input name="city" type="text" id="city" class="form-control form-control">
							<span id="city_span"></span>
						</div>
						<div class="form-group">
							<label for="">District<font color="red"> *</font></label>
							<input name="district" type="text" id="district" class="form-control form-control">
							<span id="district_span"></span>
						</div>
						<div class="form-group pt-2">
							<label for="">State<font color="red"> *</font></label>
							<select name="state" id="state" class="form-control">
								<option value="">Select</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Odissa">Odissa</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal">West Bengal</option>
							</select>
							<span id="state_span"></span>
						</div>
						<div class="form-group">
							<label for="">Party<font color="red"> *</font></label>
							<input name="party" type="text" id="party" class="form-control form-control">
							<span id="party_span"></span>
						</div>
						<div class="form-group">
							<label for="">Voter_Card<font color="red"> *</font></label>
							<input name="voter_card" type="file" id="v_card" class="form-control form-control">
						</div>
						<div class="form-group">
							<label for="">Party-Emblem<font color="red"> *</font></label>
							<input name="emblem" type="file" id="party_logo" class="form-control form-control" required>
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
		var states = document.getElementById("state").value;
		var voter = document.getElementById("vid").value;
		var aadhar = document.getElementById("aid").value;
		var date = document.getElementById("date").value;
		var city = document.getElementById("city").value;
		var district = document.getElementById("district").value;
		var party = document.getElementById("party").value;
		var party_logo = document.getElementById("party_emblem").value;
		
		if(username=="")
		{
			document.getElementById("name_span").innerHTML="User name cannot be blank";
			document.getElementById("name_span").style.color="red";
			document.getElementById("name_span").style.fontSize="15px";
			return false;
		}
		
		else if(states=="")
		{
			document.getElementById("state_span").innerHTML="State cannot be blank";
			document.getElementById("state_span").style.color="red";
			document.getElementById("state_span").style.fontSize="15px";
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
		
		else if(city=="")
		{
			document.getElementById("city_span").innerHTML="City cannot be blank";
			document.getElementById("city_span").style.color="red";
			document.getElementById("city_span").style.fontSize="15px";
			return false;
		}
		
		else if(district=="")
		{
			document.getElementById("district_span").innerHTML="District cannot be blank";
			document.getElementById("district_span").style.color="red";
			document.getElementById("district_span").style.fontSize="15px";
			return false;
		}
		
		else if(party=="")
		{
			document.getElementById("party_span").innerHTML="Party name cannot be blank";
			document.getElementById("party_span").style.color="red";
			document.getElementById("party_span").style.fontSize="15px";
			return false;
		}
		
		else if(party_logo=="")
		{
			document.getElementById("plogo_span").innerHTML="Party emblem cannot be blank";
			document.getElementById("plogo_span").style.color="red";
			document.getElementById("plogo_span").style.fontSize="15px";
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