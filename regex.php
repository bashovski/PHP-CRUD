<?php 

	define( 'regex_mail_pattern', '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/' );
	define( 'regex_pass_pattern', '^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$' ); // min. 8 chars, 1 letter or 1 num.
	function regex_validate( $string, $pattern ) {
		if( !preg_match( $pattern, $string ) ) return (false); else return (true);
	}

?>