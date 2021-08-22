<?php
	include("connect.php");
		echo "<script>alert('To update any details kindly send a mail to our registered Email_id, with the details needs to be updated.')</script>";
		echo "<script>window.location.href='c_profile.php'</script>";
	mysqli_close($con);
?>