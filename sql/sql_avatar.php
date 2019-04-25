<?php

	include( 'sql_config.php' );
	include( '../user/session.php' );
	if( isset( $_SESSION[ 'logged' ] ) && $_SESSION[ 'logged' ] == true ) {
		$query = "SELECT AvatarURL FROM crud_database.Users WHERE AvatarURL IS NOT NULL AND Username = '". $_SESSION[ 'session_username' ]."' LIMIT 1";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		$row = mysqli_fetch_assoc( $resultset );
		if( $resultset -> num_rows != 0 ) {

			print( '<script>document.getElementById( "usericonid" ).src = "'.$row['AvatarURL'].'";</script>');
			print( "<script>console.log( 'Avatar found for user.' );</script>" );
		}
	}

?>
