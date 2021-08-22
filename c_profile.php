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
	<div class="container-fluid">
		<div class="container" style="border:2px solid black;">
			<div class="row" style="background:#e29103">
				<div class="col-lg-2 col-sm-1 py-sm-3 py-2 text-center">
					<img id="logo1" src="images/logo_sm.png"/>
				</div>
				<div class="col-lg-8 col-sm-10 pt-sm-4 pt-1 text-center">
					<p id="header">Candidate Portal</p>
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
								<li class="nav-item"><a href="c_profile.php" class="nav-link active">Profile</a></li>
								<li class="nav-item"><a href="help.php" class="nav-link">Help</a></li>
								<li class="nav-item"><a href="login.php" class="nav-link">Logout</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row pt-5 pb-sm-4"  style="background:#fff;">
				<div class="col">
				<h4 class="text-danger mb-4"><u>Profile</u></h4>
				<div class="text-center">	
					<?php
						include("connect.php");
						$sql = "SELECT * FROM user where voter_id='".$_SESSION["v_id"]."' ";
						$result=mysqli_query($con,$sql);
						echo "<table style='width:100%;'>";
							
							if(mysqli_num_rows($result)>0)
							{
								while($row=mysqli_fetch_assoc($result))
								{ 		
									echo "<tr>";
										
										echo '<td style="height:150px;width:15%;border:2px solid black;">';
										echo "<img src='".$row["v_card"]."' height='168' width='148'> ";
										echo '</td>';
										echo '<td style="height:150px;width:15%;">';
										
										echo '</td>';
										echo '<td style="height:150px;width:15%;border:2px solid black;">';
										echo "<img src='".$row["v_card"]."' height='168' width='148'> ";
										echo '</td>';
										
									echo "</tr>";
									
									echo "<tr>";
										echo "<td style='border:2px solid black; color:red;'>";
											echo "Name";
										echo "</td>";
										echo '<td style="border:2px solid black;" colspan="2">'.$row["uname"].'</td>';
										
									echo "</tr>";

									
									echo "<tr>";
										echo "<td style='border:2px solid black; color:red;'>";
											echo "DOB";
										echo "</td>";
										echo '<td style="border:2px solid black;" colspan="2">'.$row["dob"].'</td>';
										
									echo "</tr>";
									
									echo "<tr>";
										echo "<td style='border:2px solid black; color:red;'>";
											echo "Voter_id";
										echo "</td>";
										echo '<td style="border:2px solid black;" colspan="2">'.$row["voter_id"].'</td>';
										
									echo "</tr>";
									
									echo "<tr>";
										echo "<td style='border:2px solid black; color:red;'>";
											echo "Aadhar";
										echo "</td>";
										echo '<td style="border:2px solid black;" colspan="2">'.$row["aadhar"].'</td>';
										
									echo "</tr>";
									
									echo "<tr>";
										echo "<td style='border:2px solid black; color:red;'>";
											echo "District";
										echo "</td>";
										echo '<td style="border:2px solid black;" colspan="2">'.$row["district"].'</td>';
										
									echo "</tr>";
									
									echo "<tr>";
										echo "<td style='border:2px solid black; color:red;'>";
											echo "City";
										echo "</td>";
										echo '<td style="border:2px solid black;" colspan="2">'.$row["city"].'</td>';
										
									echo "</tr>";
									
									echo "<tr>";
										echo "<td style='border:2px solid black; color:red;'>";
											echo "State";
										echo "</td>";
										echo '<td style="border:2px solid black;" colspan="2">'.$row["state"].'</td>';
										
									echo "</tr>";
								}
							}
							
								echo "<tr>";
									echo "<td colspan='3'>";
										echo "<a href='c_edit_back.php'><button id='edt_button' class='btn mt-2 '>Edit</button></a>";
									echo "</td>";
								echo "</tr>";
							echo "</table>";
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer">
		<p class="copyright text-center pt-2">Copyright@onlinevotingIndia2021</p>
	</div>
</body>
</html>