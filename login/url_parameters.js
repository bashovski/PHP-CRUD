function updateLoginPage() {

	try {
		var parameters = location.search.substring( 1 ).split( "&" );

		var temp = parameters[ 0 ].split( "=" );
		l = unescape( temp[ 1 ] );
		temp = parameters[ 1 ].split( "=" );
		p = unescape( temp[ 1 ] );

		document.getElementById( "user_form" ).value = l;

		if( p == "failed" ) {
			
		}

	} catch( err ) {
		console.log( "updateLoginPage() - URL w/o params | ERROR: "+ err );
	}
	return (true);
}