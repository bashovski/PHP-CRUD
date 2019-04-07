<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/footer.css">
	<title></title>
</head>
<body>

<footer class="page-footer font-small special-color-dark pt-4" style="background-image: linear-gradient( #77CD94, #57BC90 ); user-select: none;" id="main">
    <div class="container">
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <img class="icon_prop" src="../resources/github_icon.png" width="24" height="24" alt="github icon">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <img class="icon_prop" src="../resources/twitter_icon.png" width="24" height="24" alt="twitter icon">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <img class="icon_prop" src="../resources/stack-overflow.png" width="24" height="24" alt="stack-overflow icon">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <img class="icon_prop" src="../resources/fb-icon.png" width="24" height="24" alt="facebook icon">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <img class="icon_prop" src="../resources/instagram.png" width="24" height="24" alt="instagram icon">
          </a>
        </li>
      </ul>

    </div>
    <div class="footer-copyright text-center py-3" id="footer_year"></div>
    <script>  

    	var date = new Date();
    	document.getElementById( "footer_year" ).innerHTML = date.getFullYear() + ", bashovski."

    </script>
  </footer>
</body>
</html>
