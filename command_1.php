<?php
	include("connect.php");
	$name=$_POST['uname'];
	$state=$_POST['state'];
	$_SESSION["select_state"]= $state;
	$pwd=$_POST['pass'];
	$f='0';
	$sql="select * from user";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$uname="".$row["uname"]."";
			$password="".$row["voter_id"]."";
			if($uname==$name && $password==$pwd)
			{
				$f='1';
				$sql1="UPDATE user SET state='$state' WHERE uname='$uname'";
				$result1=mysqli_query($con,$sql1);	
				echo"<script>window.location.href='command.php'</script>";
			}	
		}
		if($f==0)
		{
			echo"<script>alert('Unsuccessful')</script>";
			echo"<script>window.location.href='commision.php'</script>";
		}
	}
	else
	{
		echo"<script>alert('No record Found')</script>";
	}
	mysqli_close($con);
?>
