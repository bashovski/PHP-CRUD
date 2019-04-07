<?php

function onlineUsers_list() {
		$query = "SELECT Username FROM crud_database.Users WHERE LastOnline >= (NOW()-100)";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		if( mysqli_num_rows( $resultset ) == 0 ) {

		} else {
			while( $row = mysqli_fetch_assoc( $resultset ) ) {

			}
		}
	}
	function onlineUsers_count() {
		$query = "SELECT Username FROM crud_database.Users WHERE LastOnline >= (NOW()-100)";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		return ( mysqli_num_rows( $resultset ) );	
	}

?>