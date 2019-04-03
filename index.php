<!DOCTYPE html>
<!-- https://www.canva.com/learn/wp-content/uploads/2016/01/Palette_20-tb-800x0.jpg   (color scheme to be implemented.)-->

<?php 
	
	include( "/user/session.php" );

?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/navbar.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<meta name="description" content="CRUD made with PHP.">
		<meta name="keywords" content="PHP, CRUD, mySQL, Create, Retrieve, Update, Delete, Coding, HTML, CSS, JS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<title>CRUD - Home</title>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark rounded-bottom" id="nav_id">
	  <!-- account icon -->
	  <a class="navbar-brand" href="login/login.php">
	  	<?php
	  	/*
	  		$query = "SELECT userPhoto FROM Users WHERE userid = $userid LIMIT 1;";
	  		if( mysqli_query( $conn, $query ) ) {

	  		} 
		*/
	  	?>
	    <img src="resources/usericon.png" alt="logo" id="usericonid">
	  </a>
	  
	  <!-- listitems -->
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link nav_listitems" href="">Home</a>
	    </li>
	    <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	        	<a class="dropdown-item" href="#">Dashboard</a>
	        	<a class="dropdown-item" href="#">Settings</a>
	        	<a class="dropdown-item" href="#">Privacy</a>
	        </div>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">About us</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Features</a>
	    </li>
	  </ul>
	</nav>

<?php
	/*
		todo list:

		navbar (buttons and layout)
		body of page
		buttons on navbar for login and register
		maybe instead of that logo that's places on the top right corner(navbar), i might use user's avatar which can be gathered by requests
		roles (user, supervisor, admin)
		mysql database
		protect queries of possible sql injection attacks
		inputfield spam protection (bruteforce maybe?)
		hash and salt sensible user data to provide maximum security.
		several options which do represent all 4 parts of CRUD
		admin panel
		security tokens for login sessions
		anti-flood protection
		a good looking footer

	*/
?>

</body>
</html>