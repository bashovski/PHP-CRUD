<!DOCTYPE html>
<?php

	include( "../sql/sql_config.php" );
	include( "session.php" );
	include( "../sql/sql_groups.php" );
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<meta name="description" content="CRUD made with PHP.">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/settings.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<title>CRUD - User settings</title>
<body>
	<!-- Navbar & Footer -->
	<script>
		$( function() {
			$( "#navbar_include" ).load( "../external/navbar.php" );
		} );
		$( function() {
			$( "#footer_container" ).load( "../external/footer.php" );
		} );
	</script>
	<div id="navbar_include"></div>
	<div id="footer_container"></div>
	<div id="mainbox">
	</div>
</body>
</html>
