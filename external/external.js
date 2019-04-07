function snackbar_show() {
	var x = document.getElementById("snackbar");
	//x.innerHTML = "You have inserted false account credentials which<br>do not match any accounts in the database. Please try again.";
  	x.className = "show";
  	setTimeout( function()
  		{ x.className = x.className.replace( "show", "" ); 
  	}, 3000 );
  	console.log( "snackbar_show();" );
}
