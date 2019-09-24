<!DOCTYPE html>
<html lang="en">
<head>

	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Team | GCB Women</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

	<!-- CSS link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

	<header>
		
		<!-- PHP include function to add the contents of the header.php file which contains the navigation of the website -->
		<?php include 'header.php';?>
	</header>

	<section id="marky" class="container-fluid">
		<!-- Main content in the news page of the website -->
		<!-- Container fluid makes it responsive to whatever device itis opened in -->
		<br><br>
		<h2 class="text-center">Players Profile</h2>
		
		<img src="images/megan_walker.jpg" alt="Megan Walker"><span><b>Megan Walker,</b> Point Guard 6'1"</span>
		<br><br>
		<img src="images/amy_fisher.jpg" alt="Amy Fisher"><span><b>Amy Fisher,</b> Shooting Guard 6'2"</span>
		<br><br>
		<img src="images/crystal_martins.jpg" alt="Crystal Martins"><span><b>Crystal Martins,</b> Small Forward 6'4"</span>
		<br><br>
		<img src="images/tamara_taylor.jpg" alt="Tamara Taylor"><span><b>Tamara Taylor,</b> Power Forward 6'5"</span>
		<br><br>
		<img src="images/olivia_buckley.jpg" alt="Oliver Buckley"><span><b>Olivia Buckley,</b> Center 6'6"</span>
		<br><br>
    <img src="images/joy_kuti.jpg" alt="Joy Kuti"><span><b>Joy Kuti,</b> Point Guard 6'2"</span>
    <br><br>
    <img src="images/kate_johnson.jpg" alt="Kate Johnson"><span><b>Kate Johnson,</b> Small Forward 6'4"</span>
    <br><br><br>
		

		<h2 class="text-center">Coaches</h2>
		<img src="images/gareth_bale.jpg" alt="Gareth Bale"><span><b>Gareth Bale,</b> Head Coach</span>
		<br><br>
		<img src="images/jane_bush.jpeg" alt="Jane Bush"><span><b>Jane Bush,</b> Associate Head Coach</span>
		<br><br>
		<img src="images/jasmine_lima.jpg" alt="Jasmine Lima"><span><b>Jasmine Lima,</b> Assisant Head Coach</span>
		<br><br>

		<h2 class="text-center">Register For Trial</h2><br>
		<form action="trial.php" class="needs-validation" novalidate method="post">
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
    <label for="phone">Phone Number:</label>
    <input type="tel" class="form-control" id="uname" placeholder="Enter Phone Number" name="phone" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="height">Height:</label>
    <input type="number" class="form-control" id="height" placeholder="Enter username" name="height" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="weight">Weight:</label>
    <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight" required>
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
  <button type="submit" class="btn btn-primary">Submit</button> <br><br><br>
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
	<footer>
		<?php include 'footer.php' ;?>
	</footer>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>