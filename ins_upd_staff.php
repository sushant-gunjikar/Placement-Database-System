<?php

	include_once("db.php");

	
	$sql = "update reg_staff set username='".$_POST['uname']."', password='".$_POST['password']."' where  username='".$_SESSION['SESS']."' ";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('updated successfully!!!');</script>";
		//echo "<script>window.location = 'staff.php';</script>";
	}
	mysqli_close($con);
?>

