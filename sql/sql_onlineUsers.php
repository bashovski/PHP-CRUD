<?php

function onlineUsers_list() {
		$return_array = array();
		$query = "SELECT Username FROM crud_database.Users WHERE LastOnline >= (NOW()-100)";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		if( mysqli_num_rows( $resultset ) == 0 ) {

		} else {
			while( $row = mysqli_fetch_assoc( $resultset ) ) {
				array_push( $return_array, $row[ 'Username' ] );
			}
		}
		return ($return_array);
	}
	function onlineUsers_count() {
		$query = "SELECT Username FROM crud_database.Users WHERE LastOnline >= (NOW()-100)";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		return ( mysqli_num_rows( $resultset ) );
	}
	function onlineUsers_label() {
		print( '<div style="text-align: center;" id="users_num">'.onlineUsers_count().' online users</div>' );
	}
	function todayUsers_count() {
		$query = "SELECT * FROM crud_database.Users WHERE DAY( NOW() ) = DAY( LastOnline )";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		return ( mysqli_num_rows( $resultset ) );
	}
	function todayUsers_label() {
		print( '<div style="text-align: center;" id="calendar_num">'.todayUsers_count().' users active today</div>' );
	}

?>
