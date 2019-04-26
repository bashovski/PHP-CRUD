<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark rounded-bottom" id="nav_id">
	  <!-- account icon -->
	  <a class="navbar-brand" href="../login/login.php">
	    <img src="../resources/usericon.png" alt="logo" id="usericonid">
	  	</a>

	  	<!-- listitems -->
	  	<ul class="navbar-nav">
	    <li class="nav-item">
	    	<a class="nav-link nav_listitems" href="../index/index.php">Home</a>
	    </li>
	    <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	        	<a class="dropdown-item" href="#">Dashboard</a>
	        	<a class="dropdown-item" href="../user/settings.php">Settings</a>
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
	<!-- Avatar request -->
	<script>
	$( document ).ready( function() {
	    $( "#usericonidd" ).load( "../sql/sql_avatar.php" );
	});
	</script>
	<?php
		require( "../sql/sql_avatar.php" );
	?>
</body>
</html>
