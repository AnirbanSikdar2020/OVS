<?php 
	include("connect.php");
	if(isset($_SESSION["select_state"]))
	{
		$state=$_SESSION["select_state"];
		$sql2="UPDATE user SET permission='candidate' WHERE state='$state' and validity='candidate' ";
		$result2=mysqli_query($con,$sql2);
		echo "<script>window.location.href='command.php'</script>";
	}
	else
	{
		echo "<script>alert('ERROR')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
?>