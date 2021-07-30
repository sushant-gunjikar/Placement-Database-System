<?php
	
	include_once("db.php");
	
	$sql = "INSERT INTO reg_staff(staff_id,name,username,password) VALUES ('$_POST[sid]','$_POST[name]', '$_POST[uname]', '$_POST[pass]')";

	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('Congratulations Registered successfully !!!');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
	mysqli_close($con);
?>