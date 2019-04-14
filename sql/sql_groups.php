<?php

	function groups_created() {
		$query = "SELECT * FROM crud_database.Groups WHERE GroupActive IS NOT NULL";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		$numrows = mysqli_num_rows( $resultset );
		print( '<div style="text-align: center;" id="groups_num">'.$numrows. ' groups created</div>' );
	}

?>
