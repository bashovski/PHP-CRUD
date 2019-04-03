<?php
	
	include( "./sql/sql_config.php" );
	session_start();
	if( isset( $_SESSION[ 'session_username' ] ) ) {
		$user = $_SESSION[ 'session_username' ];
		$query = "SELECT Username FROM crud_database.Users WHERE Username = '$user' LIMIT 1;";
		$resultset = mysqli_query( $conn, $query );
		$row = mysqli_fetch_array( $resultset, MYSQLI_ASSOC );
		$login_session = $row[ 'Username' ];
	    if( !isset( $login_session ) ) {
	    	$_SESSION[ 'not_logged' ] = true;
	    }
	}

?>