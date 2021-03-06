<!DOCTYPE html>
<html lang="en">
<head>

	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Fan Corner | GCB Women</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

	<!-- CSS link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

	<!-- contains navigation area which is common to all pages -->
	<header>
		<!-- PHP include function to add the contents of the header.php file which contains the navigation of the website -->
		<?php include 'header.php';?>
		
	</header>

	<section id="marky" class="container-fluid">

		<br><br> <!-- creates space between the header and the main content area. makes page look neater -->
		<?php

		require 'database/connect.php';

			// query to get all data from aboutus table in the database
			$sql = "SELECT * FROM gamedaypolicy";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        echo "<h2> " . $row["title"]. " </h2>" ."<p>". $row["content"]. " </p>" . "<br>". "<br>";
			    }
			} else {
			    echo "0 results";
			}

			mysqli_close($conn);//end connection
						
				
		?>
		
		<br><br><br>

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