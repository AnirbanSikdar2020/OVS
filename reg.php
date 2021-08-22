<?php
	include("connect.php");
	if(isset($_POST['uname']) && isset($_POST['party']))
	{
		$name=$_POST['uname'];
		$mail=$_POST['email'];
		$vid=$_POST['voterid'];
		$aid=$_POST['aadhar'];
		$dob=$_POST['dob'];
		$city=$_POST['city'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$party=$_POST['party'];
		
		//--------------for voter_card-------------
		$filename = $_FILES["voter_card"]["name"];
		$tempPath = $_FILES["voter_card"]["tmp_name"];
		$type = $_FILES["voter_card"]["type"];
		$size = $_FILES["voter_card"]["size"];
		$targetPath = "images/".str_replace(" ","_",$filename);
		move_uploaded_file($tempPath,$targetPath );
		
		//--------------for emblem-------------
		$filename = $_FILES["emblem"]["name"];
		$tempPath = $_FILES["emblem"]["tmp_name"];
		$type = $_FILES["emblem"]["type"];
		$size = $_FILES["emblem"]["size"];
		$targetPath1 = "images/".str_replace(" ","_",$filename);
		move_uploaded_file($tempPath,$targetPath1 );
		
		
		$f='0';
		$sql="insert into user values ('','$name','$dob','$vid','$aid','$district','$city','$state','candidate','$targetPath','no','stop')";
		
		$sql2="insert into vote values ('$vid','$name','$party',0,'$targetPath1')";
		
		if(mysqli_query($con,$sql) && mysqli_query($con,$sql2))
		{
			echo"<script>window.location.href='add_c.php'</script>";
		}
		else
		{
			echo"<script>alert('Try Again')</script>";
			echo"<script>window.location.href='add_c.php'</script>";
		}
	}
	
	else if(isset($_POST['uname']))
	{
		$name=$_POST['uname'];
		$mail=$_POST['email'];
		$vid=$_POST['voterid'];
		$aid=$_POST['aadhar'];
		$dob=$_POST['dob'];
		$city=$_POST['city'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		
		//--------------for voter_card-------------
		$filename = $_FILES["voter_card"]["name"];
		$tempPath = $_FILES["voter_card"]["tmp_name"];
		$type = $_FILES["voter_card"]["type"];
		$size = $_FILES["voter_card"]["size"];
		$targetPath2 = "images/".str_replace(" ","_",$filename);
		move_uploaded_file($tempPath,$targetPath2 );
		
		$f='0';
		$sql1="insert into user values ('','$name','$dob','$vid','$aid','$district','$city','$state','voter','$targetPath2','no','stop')";
		
		if(mysqli_query($con,$sql1))
		{
			echo"<script>window.location.href='add_v.php'</script>";
		}
		else
		{
			echo"<script>alert('Try Again')</script>";
			echo"<script>window.location.href='add_v.php'</script>";
		}
	}
	
	else
	{
		echo"<script>alert('ERROR')</script>";
		echo"<script>window.location.href='index.php'</script>";
	}
	mysqli_close($con);
?>
