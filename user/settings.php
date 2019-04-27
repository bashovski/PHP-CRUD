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
	<!-- Side nav -->
	<div id="mainbox" class="col-sm-2">
		<br>
		<h3>User settings</h3>
		<nav class="navbar bg-dark navbar-dark rounded-bottom">
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="?settings=credentials" id="listitem_credentials">Account credentials</a>
		    </li>
		    <li class="nav-item" id="listitem_profile" >
		      <a class="nav-link" href="?settings=profile">Profile settings</a>
		    </li>
		    <li class="nav-item" id="listitem_pref">
		      <a class="nav-link" href="?settings=pref">Preferences</a>
		    </li>
			<li class="nav-item" id="listitem_adv">
		      <a class="nav-link" href="?settings=adv">Advanced</a>
		    </li>
		  </ul>
		</nav>
		<hr class="d-sm-none">
	</div>
	<!-- Template load -->
	<script src="load_settings.js"></script>
	<div id="template_body"></div>
</body>
</html>
