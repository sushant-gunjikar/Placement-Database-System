<?php

	include_once("db.php");

	
	$sql = "update company set package='".$_POST['package']."', cgpa='".$_POST['cgpa']."', twelth_per='".$_POST['twelth_p']."', tenth_per='".$_POST['tenth_p']."' where cid='".$_POST['cid']."' ";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('updated successfully!!!');</script>";
		echo "<script>window.location = 'company.php';</script>";
	}
	mysqli_close($con);
?>





