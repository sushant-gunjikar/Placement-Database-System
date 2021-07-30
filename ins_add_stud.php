<?php
	
	include_once("db.php");
	
	$sql = "INSERT INTO placed_students(usn,name,branch,cname,package,year) VALUES ('$_POST[usn]', '$_POST[name]', '$_POST[branch]', '$_POST[cname]', '$_POST[package]', '$_POST[year]')";
	
	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('Added successfully !!!');</script>";
		echo "<script>window.location = 'add_stud.php';</script>";
	}
	mysqli_close($con);
?>