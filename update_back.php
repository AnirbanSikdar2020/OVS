<?php
	include("connect.php");
	if(isset($_POST['uname']))
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
		$targetPath = "images/".str_replace(" ","_",$filename);
		move_uploaded_file($tempPath,$targetPath );
		
		
		
		$f='0';
		$sql="select * from user";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$uname="".$row["uname"]."";
				$email="".$row["email"]."";
				$date="".$row["dob"]."";
				$voter="".$row["voter_id"]."";
				$aadhar2="".$row["aadhar"]."";
				$dist="".$row["district"]."";
				$city2="".$row["city"]."";
				$state2="".$row["state"]."";
				$voter_card2="".$row["v_card"]."";
				$check="".$row["validity"]."";
				
				if($uname==$name && $vid==$voter)
				{
					$f=1;
					$name1=$name==""?$uname:$name;
					$mail1=$mail==""?$email:$mail;
					$dob1=$dob==""?$date:$dob;
					$aadhar1=$aid==""?$aadhar2:$aid;
					$dist1=$district==""?$dist:$district;
					$city1=$city==""?$city2:$city;
					$state1=$state==""?$state2:$state;
					$filename1=$filename==""?$voter_card2:$targetPath;
						
					$sql2="UPDATE user SET uname='$name1',dob='$dob1',aadhar='$aadhar1',district='$dist1',city='$city1',state='$state1',v_card='$filename1' WHERE voter_id='$vid'";
											
					$result2=mysqli_query($con,$sql2);
					
					if($check=='candidate')
					{	
						$party=$_POST['party'];	
						
						//--------------for emblem-------------
						$file = $_FILES["emblem"]["name"];
						$tempPath = $_FILES["emblem"]["tmp_name"];
						$type = $_FILES["emblem"]["type"];
						$size = $_FILES["emblem"]["size"];
						$targetPath1 = "images/".str_replace(" ","_",$file);
						move_uploaded_file($tempPath,$targetPath1 );
						
						$sql4="select * from vote";
						$result4=mysqli_query($con,$sql4);
						if(mysqli_num_rows($result4)>0)
						{
							while($row=mysqli_fetch_assoc($result4))
							{
								$voter1="".$row["voter_id"]."";
								$party2="".$row["party"]."";
								$plogo="".$row["plogo"]."";
								if($vid==$voter1)
								{
							
									$party1=$party==""?$party2:$party;
									$filename2=$file==""?$plogo:$targetPath1;
										
									$sql5="UPDATE vote SET party='$party1',plogo='$targetPath1' WHERE voter_id='$vid'";
													
									$result5=mysqli_query($con,$sql5);
									
								}
							}
						}
					}

				}
			}
			if($f==0)
			{
				echo"<script>alert('Unsuccessful')</script>";
				echo"<script>window.location.href='update_v.php'</script>";
			}
			else if($f=1)
			{
				echo"<script>alert('Successful')</script>";
				echo"<script>window.location.href='update_v.php'</script>";
			}
		}
		else
		{
			echo"<script>alert('No record Found')</script>";
		}
	}
	else
	{
		echo "<script>alert('ERROR')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	mysqli_close($con);
?>
