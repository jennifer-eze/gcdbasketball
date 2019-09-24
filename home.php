<!DOCTYPE html>
<html lang="en">
<head>

	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Jennifer">

	<!-- Page Title -->
	<title>Home | GCB Women</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

	<!-- CSS link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- <link rel="stylesheet" href="main.css"> -->

</head>

<body class="container-fluid"> <!-- justify-content-center -->

	<!-- contains navigation area which is common to all pages -->
	<header>
		<!-- PHP include function to add the contents of the header.php file which contains the navigation of the website -->
		<?php include 'header.php';?>
		
	</header>

	<section id="marky" class="container-fluid">

		<!-- Main content in the body of the home page -->
		<br><br>
		<h3 class="text-center">SIGN UP FOR OUR NEWSLETTER</h3><br>
		<!-- Creating Newsletter form -->

		<form action="insert.php" class="needs-validation" novalidate method="post">
			<div class="col-sm-6">
			  <div class="form-group">
			    <label for="fname">First Name:</label>
			    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			  </div>
			  <div class="form-group">
			    <label for="lname">Last Name:</label>
			    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			  </div>
			  <div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox" name="remember" required> I agree terms and conditions.
			      <div class="valid-feedback">Valid.</div>
			      <div class="invalid-feedback">Check this checkbox to continue.</div>
			    </label>
			  </div>
			</div>
			  <button type="submit" class="btn btn-primary">Subscribe</button> <br><br><br>
		</form>

		<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
	</section>

	<!-- contains footer area which is common to all pages -->
	<footer>
		<!-- PHP include function to add the contents of the header.php file which contains the navigation of the website -->
		<?php include 'footer.php';?>
	</footer>



	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>