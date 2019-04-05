<!DOCTYPE html>



<?php 

	include( "../sql/sql_config.php" );
	include( "../regex.php" ); // patterns and pattern validation
	include( "../user/session.php" );
	check_session( "../index.php" );

	if( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {

		$temp_username = mysqli_real_escape_string( $conn, $_POST[ 'username' ] );
		$temp_password = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );
		$temp_mail = mysqli_real_escape_string( $conn, $_POST[ 'mail' ] );

		// RegEx
	    if( regex_validate( regex_mail_pattern, $temp_mail ) ) return header( "location: /register.php?error=mail" );
	    if( regex_validate( regex_pass_pattern, $temp_password ) ) return header( "location: /register.php?error=password" );
	    if( regex_validate( regex_user_pattern, $temp_username ) ) return header( "location: /register.php?error=username" );

	    // Length check
	    if( strlen( $temp_password ) < 5 || strlen( $temp_password ) > 20 ) return header( "location: /register.php?error=password" );
	    if( strlen( $temp_username ) < 3 || strlen( $temp_username ) > 24 ) return header( "location: /register.php?error=username" );

		$query = "SELECT * FROM crud_database.Users WHERE Username = '$temp_username' OR Mail = '$temp_mail'";
		$resultset = mysqli_query( $conn, $query );
	    $row = mysqli_fetch_array( $resultset, MYSQLI_ASSOC );
	    $count = mysqli_num_rows( $resultset );
	    if( $count ) {
	    	header( "location: ../register/register.php?error=exists" ); 
	    } else {

			$query = "INSERT INTO crud_database.Users( `Username`, `Password`, `Mail` ) VALUES ( '$temp_username', '$temp_password', '$temp_mail' )";
			mysqli_query( $conn, $query );

			$_SESSION[ 'session_username' ] = $temp_username;
			header( "location: ../index.php?registration=complete" );
		}
	}

?>

<html>
	<head>
		<!-- CDNs -->
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/registerform.css">
		<link rel="stylesheet" href="../css/snackbar.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<meta name="description" content="CRUD made with PHP.">
		<meta name="keywords" content="PHP, CRUD, mySQL, Create, Retrieve, Update, Delete, Coding, HTML, CSS, JS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<title>CRUD - Register</title>
<body>

	<!-- Navbar -->
	<script>
		$( function() {
      		$( "#navbar_include" ).load( "../navbar.php" ); 
    	} );
	</script>
	<div id="navbar_include"></div>
	<div id="mainbox">
		Create a New Account
		<form action="" method="POST">
			<input class="inputforms" id="user_form" type="text" name="username" placeholder=" New username" spellcheck="false"><br>
			<input class="inputforms" id="pass_form" type="password" name="password" placeholder=" New password" spellcheck="false"><br>
			<input class="inputforms" id="mail_form" type="text" name="mail" placeholder=" Your e-mail" spellcheck="false"><br>
		  	<input id="register_button" type="submit" value="Sign Up">
		</form>	
	</div>
	<div id="notice" style="font-size: 12px;">By clicking 'Sign Up', you are accepting our <a href="../tos.php" id="tos_props">ToS</a> and <a href="../user/privacy.php" id="tos_props">PP</span>.</div>
	<div id="login">Already have an account? Proceed to login.</div>
</body>
</html>
