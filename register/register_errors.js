function displayError() {
	var param = location.search.substring( 1 ).split( "&" );
	var temp = param[ 0 ].split( "=" );
	l = unescape( temp[ 1 ] );
	if( l == "mail" ) document.getElementById( "snackbar" ).innerHTML = "You have inserted invalid mail.<br>Please try again.";
	else if( l == "username" ) document.getElementById( "snackbar" ).innerHTML = 
		"Your username mustn't contain special symbols.<br>\
		Length should be between 3 and 24 characters.<br>\
		Please try again.";
	else if( l == "password" ) document.getElementById( "snackbar" ).innerHTML = 
		"You have inserted invalid password.<br>\
		The password must contain at least one lowercase symbol.<br>\
		The length of password should be between 5 and 20 characters.<br>\
		Please try again.";
	else if( l == "exists" ) document.getElementById( "snackbar" ).innerHTML = 
		"Account with inputted credentials exists.<br>\
		Maybe you should log-in.";
	snackbar_show();			
}