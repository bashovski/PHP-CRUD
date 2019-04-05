<?php
	
	session_start();
	if( isset( $_SESSION[ 'session_username' ] ) ) {
		$user = $_SESSION[ 'session_username' ];
		$query = "SELECT Username FROM crud_database.Users WHERE Username = '$user' LIMIT 1;";
		$resultset = mysqli_query( $conn, $query );
		$row = mysqli_fetch_array( $resultset, MYSQLI_ASSOC );
		$login_session = $row[ 'Username' ];
	    if( !isset( $login_session ) ) {
	    	$_SESSION[ 'logged' ] = false;
	    } else {
	    	$_SESSION[ 'logged' ] = true;
	    }
	} else $_SESSION[ 'logged' ] = false;


	function check_session( $path ) {
		if( isset( $_SESSION[ 'logged' ] ) && $_SESSION[ 'logged' ] == true ) 
			return header( "location: $path" );
	}

?>
