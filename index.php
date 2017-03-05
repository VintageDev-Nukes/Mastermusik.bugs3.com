<?
$action = @$_GET['action'];

if($_GET['pass']=="123456"){
setcookie("acceso", "ok", 1378591203);
header("location:index.php");
} elseif($_COOKIE["acceso"] == "ok") {?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Elektro H@cker's music web By Ikillnukes</title>
<link rel="icon" type="image/ico" href="favicon.ico"></link>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

<script id="_wau5p9">var _wau = _wau || [];
_wau.push(["tab", "h1wpcmig86vj", "5p9", "left-middle"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/tab.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>

<?php //if($action == "contacto"){echo "<body onload=\"window.open('http://mastermusik.bugs3.com/Terms.php','1374005476557','width=400,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');\">";} ?>

<div class="fondo"></div>
<div id="all">
<div class="header"><img src="cooltext1105916314.png" style="margin-left:20px;margin-top:20px;" />

<table style="position: absolute;right: 10px;top: 50%;margin-top: -35px;"><tr><td style="padding-right:10px;"><a href="index.php?lang=es"><img src="Flags/es.png" style="width:64px;height:64px;" /></a></td><td><a href="index.php?lang=en"><img src="Flags/usa.png" style="width:64px;height:64px;" /></a></td></tr></table></div>
<div id="menubar"></div>

	<div class="body"><div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>¿Quiénes somos?</span></a></li>
   <li><a href='index.php?action=catalogo'><span>Catálogo</span></a></li>
   <li><a href='index.php?action=app'><span>Programas</span></a></li>
   <li><a href='index.php?action=precios'><span>Precios</span></a></li>
   <li><a href='index.php?action=contacto'><span>Contacto</span></a></li>
   <li><a href='index.php?action=faq'><span>FAQ</span></a></li>
   <li class='last'><a href='index.php?action=admin'><span>Administración</span></a></li>
</ul>
</div>
		<div id="content_section">
			<div class="wrapper" style="color:#fff;">
<?php
$go = @$_GET['action'];
if(empty($go)){$go='inicio';}

switch($go){
 
   case 'inicio':
      include_once('content.php');
      break;
 
   case 'catalogo':
      include_once('catalogo.php');
      break;

   case 'admin':
      include_once('admin.php');
      break;
 
   case 'login':
      include_once('login.php');
      break;

   case 'precios':
      include_once('Precios.php');
      break;  

   case 'contacto':
      include_once('Contacto.php');
      break;

   case 'terms':
      include_once('Terms.php');
      break;

   case 'app':
      include_once('App.php');
      break;

   case 'faq':
      include_once("FAQ.php");
      break;

   default:
      include_once('404.php');
      break;
}
?>
</div>
<?

echo '<center>

<br>Esta p&aacute;gina ha obtenido ';

$fp = fopen("id2.txt","r");  
//Se abre el archivo contador.txt, la r de read 

$visitas = intval(fgets($fp));  
// Se lee las visitas y se indica con intval para que se devuela un valor entero 

$visitas++;  
//Se agregan las visitas 

fclose($fp);  
// Se cierra el archivo 

$fp = fopen("id2.txt","w");  
// Se abre en modo de escritura 

fputs($fp,$visitas);  
// Se escriben las visitas 

echo number_format($visitas);  
// Se muestran las visitas 
echo ' visitas.<br>|| P&aacute;gina hecha por <b>Ikillnukes</b>. || (Skype: <h3 style="display: inline;">ikillnukes</h3>) ||<br><font color="000000">||</font> <a href="index.php?action=terms">T&eacute;rminos legales</a> <font color="000000">||</font><br><br>

</center>';

?>
</div></div></div>
</body>
</html>
<? 
} elseif(!$_GET['pass']=="123456" || !$_COOKIE["acceso"] == "ok") {
include 'cookie2.php';
if($_COOKIE["Elektro"] == "cumple") {
include 'sorpresa.php';
}
}
?>