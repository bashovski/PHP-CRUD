<!DOCTYPE html>
<!-- https://www.canva.com/learn/wp-content/uploads/2016/01/Palette_20-tb-800x0.jpg   (color scheme to be implemented.)-->
<?php

	include( "../sql/sql_config.php" );
	include( "../user/session.php" );
	include( "../sql/sql_onlineUsers.php" );
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
		<meta name="keywords" content="PHP, CRUD, mySQL, Create, Retrieve, Update, Delete, Coding, HTML, CSS, JS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<title>CRUD - Home</title>
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
	<div id="central_body">
		<!-- Groups icon -->
		<a href="../groups/index.php"><img id="group_img" src="../resources/group_icon.png"></a>
		<!-- Users icon -->
		<a href="../groups/index.php"><img id="users_img" src="../resources/users_icon.png"></a>
		<!-- Today-active users icon -->
		<a href="../groups/index.php"><img id="calendar_img" src="../resources/calendar_icon.png"></a>
		<!-- Groups num -->
		<?php
			groups_created();
			onlineUsers_label();
			todayUsers_label();
		?>
	</div>

</body>
</html>
