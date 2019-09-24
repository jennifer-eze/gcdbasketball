<?php
	
	//connect to gcd_women database
	require 'database/connect.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	//insert data into newsletter table
	$sql = "INSERT INTO contact (fname,lname,email,message) VALUES ('$fname','$lname','$email','$message')";

	if (!mysqli_query($conn,$sql)) {
		# code...
		echo "Oops,Something went wrong. Try again";
	}
	else{
		echo "Your message has been delivered";
	}

	//refresh and go back to home page
	header("refresh:2;url=contact.php");

?>