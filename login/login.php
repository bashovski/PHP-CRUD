<!DOCTYPE html>

	<script src="../login/url_parameters.js"></script>
<?php

	include( "../sql/sql_config.php" );
	session_start();

	// Internal input handling
	if( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {

		$temp_username = mysqli_real_escape_string( $conn, $_POST[ 'username' ] );
		$temp_password = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );

		$query = "SELECT * FROM crud_database.Users WHERE Username = '$temp_username' AND Password = '$temp_password' LIMIT 1;";
		$resultset = mysqli_query( $conn, $query );
	    $row = mysqli_fetch_array( $resultset, MYSQLI_ASSOC );
	    $count = mysqli_num_rows( $resultset );
		if( $count ) {
			$_SESSION[ 'session_username' ] = $temp_username;
			//print( "<script>console.log( 'Logged in' );</script>");
			header( "location: ../index.php" );
		} else {
			header( "location: ../login/login.php?name=$temp_username&type=failed" );
			print( "<script>updateLoginPage();</script>" );
		}
	}
?>

<html>
	<head>
		<!-- CDNs -->
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/navbar.css">
		<link rel="stylesheet" href="../css/loginform.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<meta name="description" content="CRUD made with PHP.">
		<meta name="keywords" content="PHP, CRUD, mySQL, Create, Retrieve, Update, Delete, Coding, HTML, CSS, JS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<title>CRUD - Login</title>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark rounded-bottom" id="nav_id">
	  <!-- account icon -->
	  <a class="navbar-brand" href="login/login.php">
	  	<?php
	  	?>
	    <img src="../resources/usericon.png" alt="logo" id="usericonid">
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
	
	<!-- main rect container -->
	<div id="mainbox">
		Log into CRUD App
		<form action="" method="POST">
			<input class="inputforms" id="user_form" type="text" name="username" placeholder=" Your username" spellcheck="false"><br>
			<input class="inputforms" id="pass_form" type="password" name="password" placeholder=" Your password" spellcheck="false"><br>
		  	<input id="login_button" type="submit" value="Submit">
		</form>
	</div>
	<!--<div id="login_button">Login</div>-->
	<div id="signup">Still haven't joined us? What are you waiting for? Get in here!</div>

	<?php
		//	showing errors for wrong inserted credentials during login (reverting username form back to inserted username and displaying error as a snackbar popup)
		print( "<script>updateLoginPage();</script>" );
	?>
</body>

</html>