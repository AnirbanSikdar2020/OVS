<?php
	include("connect.php");
	if(isset($_POST['uid']))
	{
		$name=$_POST['uid'];
		$pass=$_POST['pwd'];
		$f=1;
		
		$sql="select * from user";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$uname="".$row["uname"]."";
				$voter="".$row["voter_id"]."";
				$check="".$row["validity"]."";
				$permission="".$row["permission"]."";
				if($uname=='commision2021' && $voter==$pass && $check='commision')
				{
					$_SESSION["u_id"]= $uname;
					$f=0;
					echo "<script>window.location.href='commision.php'</script>";
				}
				else if($uname==$name && $voter==$pass && $check=='candidate')
				{
					if($permission=='candidate')
					{
						$_SESSION["v_id"]= $voter;
						$f=0;
						echo "<script>window.location.href='c_profile.php'</script>";
					}
					else
					{
						echo "<script>alert('Please try after sometime')</script>";
						echo "<script>window.location.href='index.php'</script>";
					}					
				}
				else if($uname==$name && $voter==$pass && $check=='voter')
				{	
					if($permission=='start')
					{
						$_SESSION["v_id"]= $voter;
						$f=0;
						echo "<script>window.location.href='v_profile.php'</script>";
					}
					else
					{
						echo "<script>alert('Voting has not yet started')</script>";
						echo "<script>window.location.href='index.php'</script>";
					}					
				}
				else if($uname==$name && $voter==$pass && $check=='invalid')
				{
					$f=0;
					echo "<script>alert('The registered voter-id is invalid, Please contact Election Commision if you think it is still valid.')</script>";
					echo "<script>window.location.href='index.php'</script>";
				}
			}
			if($f=1)
			{
				echo "<script>alert('Try Again')</script>";
				echo "<script>window.location.href='index.php'</script>";
			}
		}
		
		else
		{
			echo "<script>alert('Try Again')</script>";
			echo "<script>window.location.href='index.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('ERROR')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	mysqli_close($con);
?>
