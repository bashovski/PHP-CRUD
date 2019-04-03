<?php

	// Definitions for further use while connecting to database.
	define( 'SQL_USER', "root" );
	define( 'SQL_PASS', "" );
	define( 'SQL_SERVERNAME', "localhost:3306" );
	define( 'SQL_DATABASE', "crud_database" );
	function js_sql_failed( $error ) {
		print( "<script>console.log('Couldn't connect to database. $error');</script>" );
	}
	function js_sql_loaded() {
		print( "<script>console.log('DATABASE - Successfully connected to SQL Database.');</script>" );
	}

	$conn = mysqli_connect( SQL_SERVERNAME, SQL_USER, SQL_PASS, SQL_DATABASE );
	if( $conn -> connect_error ) return js_sql_failed( $conn->connect_error );
	else js_sql_loaded();


	function no_account() {
		return "<script>console.log( 'Inserted data doesn't belong to any registered accounts.' );</script>";
	}

	function debug( $data ) {
	    print( "<script>console.log( 'Debug Objects: $data' );</script>" );
	}

?>