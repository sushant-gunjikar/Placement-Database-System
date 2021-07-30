<?php
	include_once("db.php");
	session_start();
	
	$sql="select * from reg_staff where username='".$_POST['uname']."' and password='".$_POST['password']."' ";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 1 )
	{
		$_SESSION['SESS'] = $_POST['uname'];
		echo "<script>window.location = 'staff.php';</script>";
	}
	else
	{
		echo "<script>alert('Invalid Details');</script>";
		echo "<script>window.location = 'index.html';</script>";
		
	}
	mysqli_close($con);
?>

	