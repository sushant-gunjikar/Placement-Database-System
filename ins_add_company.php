<?php
	
	include_once("db.php");
	
	$sql = "INSERT INTO company(cid,cname,package,cgpa,twelth_per,tenth_per) VALUES ('$_POST[cid]', '$_POST[cname]', '$_POST[package]', '$_POST[cgpa]', '$_POST[twelth]', '$_POST[tenth]')";
	
	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('Company Added successfully !!!');</script>";
		echo "<script>window.location = 'company.php';</script>";
	}
	mysqli_close($con);
?>