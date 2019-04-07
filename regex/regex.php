<?php 

	define( 'regex_mail_pattern', '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/' );
	define( 'regex_pass_pattern', '/^(?=[^a-z]*[a-z])(?=\D*\d)[^:&.~\s]{5,20}$/' );
	define( 'regex_user_pattern', '^[a-zA-Z0-9._-]{3,}$' );
	function regex_validate( $string, $pattern ) {
		if( !preg_match( $pattern, $string ) ) return (false); else return (true);
	}
?>
