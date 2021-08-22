<?php
include("connect.php");
	$filename = $_FILES["myimg"]["name"];
	$tempPath = $_FILES["myimg"]["tmp_name"];
	$type = $_FILES["myimg"]["type"];
	$size = $_FILES["myimg"]["size"];
	$targetPath = "uploads/".str_replace(" ","_",$filename);
	move_uploaded_file($tempPath,$targetPath );

	$sql= " UPDATE register SET img_path='".$targetPath."'
   			Where email='".$_SESSION["email"]."' "; 
	if (mysqli_query($con,$sql)) 
	{
		echo"<script>window.location.href='student.php'</script>";
	} 
	else 
	{
		echo "<script>alert('Try again')</script>";
		echo"<script>window.location.href='student.php'</script>";
	}
?>