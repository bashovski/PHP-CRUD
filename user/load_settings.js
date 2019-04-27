const
	url_param_credentials = "credentials",
	url_param_profile = "profile",
	url_param_preferences = "pref",
	url_param_advanced = "adv";

function side_nav_active_listitem( listitem_string ) {
	console.log( "listitem_" + listitem_string );
	var id = document.getElementById( "listitem_" + listitem_string );
	if( id != null ) id.classList.add( "active" );
	else document.getElementById( "listitem_" + url_param_credentials ).classList.add( "active" );
}
function update_page( listitem_string ) {
	if( listitem_string == url_param_credentials ) {
		$( function() {
			$( "template_body" ).load( "/templates/settings/template_body.php" );
		});
	}
}
function url_check() {
	var param = location.search.substring( 1 ).split( "&" );
	var temp = param[ 0 ].split( "=" );
	l = unescape( temp[ 1 ] );
	side_nav_active_listitem( l );
	update_page( l );
}


// code to be executed:

url_check();
