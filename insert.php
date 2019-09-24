<?php
	
	//connect to gcd_women database
	require 'database/connect.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];

	//insert data into newsletter table
	$sql = "INSERT INTO newsletter (fname,lname,email) VALUES ('$fname','$lname','$email')";

	if (!mysqli_query($conn,$sql)) {
		# code...
		echo "Oops,Something went wrong. Try again";
	}
	else{
		echo "Thank you for subscribing";
	}

	//refresh and go back to home page
	header("refresh:2;url=home.php");

?>