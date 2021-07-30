<?php
	
	include_once("db.php");
	
	
	//$sql = "INSERT INTO stud_details(name,usn,branch,email,phno,address,10_per,12_per,be_1_per,be_2_per,be_3_per,be_4_per,be_5_per,be_6_per,cgpa,percentage) VALUES ('$_POST[name]', '$_POST[usn]', '$_POST[branch]', '$_POST[email]', '$_POST[phno]', '$_POST[address]', '$_POST[10p]', '$_POST[12p]', '$_POST[1sgpa]', '$_POST[2sgpa]', '$_POST[3sgpa]', '$_POST[4sgpa]', '$_POST[5sgpa]', '$_POST[6sgpa]', '$_POST[cgpa]', '$_POST[per]')";
	
	$sql = "INSERT INTO stud_details(name,usn,branch,email,phno,address,10_per,12_per,be_1_per,be_2_per,be_3_per,be_4_per,be_5_per,be_6_per,cgpa,percentage) VALUES ('$_POST[name]', '$_POST[usn]', '$_POST[branch]', '$_POST[email]', '$_POST[phno]', '$_POST[address]', '$_POST[tenght_p]', '$_POST[twelth_p]', '$_POST[first_sgpa]', '$_POST[second_sgpa]', '$_POST[third_sgpa]', '$_POST[fourth_sgpa]', '$_POST[fifth_sgpa]', '$_POST[sixth_sgpa]', '$_POST[cgpa]', '$_POST[per]')";
	
	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('Congratulations Registered successfully !!!');</script>";
		echo "<script>window.location = 'student_details.php';</script>";
	}
	mysqli_close($con);
?>