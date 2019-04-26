<?php

	function groups_created() {
		$query = "SELECT * FROM crud_database.Groups WHERE GroupActive IS NOT NULL";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		$numrows = mysqli_num_rows( $resultset );
		print( '<div style="text-align: center;" id="groups_num">'.$numrows. ' groups created</div>' );
	}

	function groups_sort( $GROUP_SORT_TYPE ) {
		if( $GROUP_SORT_TYPE == "popularity" ) {
			$query = "SELECT * FROM crud_database.Groups ORDER BY GroupApproved, GroupUsers DESC";
		}
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		while( $row = mysqli_fetch_assoc( $resultset ) ) {

		}
		return ( $GROUP_SORT_TYPE );
	}
	function getUserGroup() {
		$query = "SELECT UserGroup FROM crud_database.Users WHERE Username = '". $_SESSION[ 'session_username' ]. "' LIMIT 1";
		$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
		if( $resultset -> num_rows > 0 ) {
			$data = mysqli_fetch_assoc( $resultset );
			$query = "SELECT GroupName FROM crud_database.Groups WHERE GroupID = ". $data[ 'UserGroup' ] ."LIMIT 1";
			$resultset = mysqli_query( $GLOBALS[ 'conn' ], $query );
			$data = mysqli_fetch_assoc( $resultset );
			return ( $data[ 'GroupName' ] );
		} else return (null);
	}

?>
