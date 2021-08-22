<?php 
	include("connect.php");
	if(isset($_GET['uid']))
	{
		$uid=$_GET['uid'];
		$sql="select * from vote";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$vid="".$row['voter_id']."";
				if($vid==$uid)
				{
					$vote1="".$row['vote']."";
					$i=$vote1+1;
					$sql1="UPDATE vote SET vote='$i' WHERE voter_id='$vid'";
					$result1=mysqli_query($con,$sql1);
					
					$sql2="UPDATE user SET vote_status='yes' WHERE voter_id='".$_SESSION["v_id"]."' ";
					$result2=mysqli_query($con,$sql2);
					echo "<script>window.location.href='v_profile.php'</script>";
					
				}
			}
		}
	}
	else
	{
		echo "<script>alert('ERROR')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
?>