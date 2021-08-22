<?php
	include("connect.php");
	if(isset($_POST['uname']))
	{
		$name=$_POST['uname'];
		$vid=$_POST['voterid'];
		$aid=$_POST['aadhar'];
		$dob=$_POST['dob'];
		
		$f='0';
		$sql="select * from user";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$uname="".$row["uname"]."";
				$voter="".$row["voter_id"]."";
				$aadhar="".$row["aadhar"]."";
				$date="".$row["dob"]."";
				$valid="".$row["validity"]."";
				if($uname==$name && $vid==$voter && $aid==$aadhar && $date==$dob)
				{
					if($valid=='voter')
					{		
						$f='1';
						$sql1="UPDATE user SET validity='voter' WHERE voter_id='$vid'";
						$result1=mysqli_query($con,$sql1);	
						echo"<script>window.location.href='rem_v.php'</script>";
					}
					else
					{
						$f='1';
						echo"<script>alert('Please check if the registered member is only voter and not candidate ?')</script>";
						echo"<script>window.location.href='rem_v.php'</script>";
					}
				}					
			}
			if($f==0)
			{
				echo"<script>alert('Unsuccessful')</script>";
				//echo"<script>window.location.href='rem_v.php'</script>";
			}
		}
		else
		{
			echo"<script>alert('No record Found')</script>";
		}
	}
	mysqli_close($con);
?>
