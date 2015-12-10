<?php
function userlanguage(){
	if (!isset($_GET['language'])) {
		$_SESSION['language'] = 'en';
		}
		else {
		$language=$_GET['language'];
		switch ($language) {
		case 'pt-BR': 
		$_SESSION['language'] = 'ptbr';
		break;
		case 'en-US': 
		$_SESSION['language'] = 'en';
		break;
		}
	} 
}
 

function defaultheader($language,$titulo,$description,$keywords) {
echo "<!DOCTYPE html>
<html lang=\"$language\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"author\" content=\"PHP-GTK Team\" />
<meta name=\"description\" content=\"$description\" />
<meta name=\"keywords\" content=\"$keywords\" />
<title>$titulo</title>
<link rel=\"stylesheet\" href=\"css/w3.css\" />
<link rel=\"stylesheet\" href=\"css/w3-theme-blue.css\" /> 
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
</head>";
}

function defaulttop() {
$menu=explode(":",DEFAULTMENU);
echo"<header class=\"w3-row\">
<div class=\"w3-container w3-default-blue \">
<header class=\"w3-container w3-default-blue w3-half w3-animate-left\">
<img  src=\"images/logo_phpgtk.png\" height=\"69\" width=\"167\" alt=\"Logo PHP-GTK\" />
<h6 >".DEFAULTHEADER1."</h6>
</header>
<article class=\"w3-container w3-default-blue w3-half  w3-animate-right\"><p>".DEFAULTHEADER2."</p>
</article>
</div>
</div>
<div class=\"w3-topnav w3-medium w3-black \">
  <a href=\"index.php\">$menu[0]</a>
  <a href=\"#\">$menu[1]</a>
  <a href=\"#\">$menu[2]</a>
  <a href=\"#\">$menu[3]</a>
  <a href=\"#\">$menu[4]</a>
  <a href=\"#\">$menu[5]</a>
  <a href=\"#\">$menu[6]</a>
  <div class=\"w3-dropdown-hover\">
  <button class=\"w3-btn\">".LANGUAGE."</button>
  <div class=\"w3-dropdown-content w3-border w3-black\">
  <a href=\"".$_SERVER['PHP_SELF']."?language=en-US\"><img src=\"images/flags/us.png\" height=\"11\" width=\"16\" alt=\"English\" /> English</a>
  <a href=\"".$_SERVER['PHP_SELF']."?language=pt-BR\"><img src=\"images/flags/br.png\" height=\"11\" width=\"16\" alt=\"Português Brasil\" /> Português</a>
  </div>
  </div>
</div>";
}

function defaultmenuright() {
$menuleft=explode(":",DEFAULTMENULEFT);
echo"
  <p><a href=\"#\" class=\"w3-btn w3-round-xxlarge\" \">$menuleft[0]</a></p>
  <p><a href=\"#\" class=\"w3-btn w3-round-xxlarge\" \">$menuleft[1]</a></p>
  <p><a href=\"#\" class=\"w3-btn w3-round-xxlarge\" \">$menuleft[2]</a></p>
";

}


function defaultfooter() {
$copyright=explode("*",COPYRIGHT);
echo "<footer class=\"w3-container w3-default-blue w3-small w3-animate-opacity \">
<div class=\"w3-left\">$copyright[0]</div>
 <div class=\"w3-right\">$copyright[1]</div>
</footer>
</html>";
}

?>