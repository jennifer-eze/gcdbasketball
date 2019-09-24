<?php
	
	//connect to gcd_women database
	require 'database/connect.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];

	//insert data into newsletter table
	$sql = "INSERT INTO trial_registration (fname,lname,email,phone,age,height,weight) VALUES ('$fname','$lname','$email','$phone','$age','$height','$weight')";

	if (!mysqli_query($conn,$sql)) {
		# code...
		echo "Oops,Something went wrong. Try again";
	}
	else{
		echo "Your application has been submitted";
	}

	//refresh and go back to home page
	header("refresh:2;url=contact.php");

?>