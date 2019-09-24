<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Contact | GCD Women</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

		<!-- CSS link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>

	<body class="container-fluid">

		<!-- contains navigation area which is common to all pages -->
		<header>
			<!-- PHP include function to add the contents of the header.php file which contains the navigation of the website -->
			<?php include 'header.php';?>
			
		</header>

		<section id="marky" class="container-fluid">

			<br><br>

		<h2 class="text-center">Contact Us</h2><br>
			
			<form action="messenger.php" class="needs-validation" novalidate method="post">
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
			  <div class="form-group">
			  <label for="message">Message:</label>
			  <textarea class="form-control" rows="5" id="message" name="message" required placeholder="Enter Message Here"></textarea>
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

		<!-- Google Map showing gcd women's location -->
		<h1>Find us on the map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<!-- JavaScript code for enabling the map -->
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(53.3286569,-6.271573399999999),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<!-- free google API key -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<br><br><br>

		</section>


		<!-- contains footer area which is common to all pages -->
	<footer>
		<!-- PHP include function to add the contents of the header.php file which contains the navigation of the website -->
		<?php include 'footer.php';?>
	</footer>

	</body>
</html>