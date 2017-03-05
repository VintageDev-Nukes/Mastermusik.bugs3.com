<?php

$ok = $_GET['cookie'];
$cookie = $_COOKIE['terminos'];

if ($ok == "ok"){
setcookie("terminos", "ok", time() + 60*60*24*365*10);
header("Location: http://mastermusik.bugs3.com");
die();
}

if ($ok == "borra"){
setcookie("terminos", "", time() + 60*60*24*365*10);
header("Location: http://mastermusik.bugs3.com/cookie.php");
die();
}
if ($ok == "no"){
setcookie("terminos", "no", time() + 60*60*24*365*10);
header("Location: http://mastermusik.bugs3.com/cookie.php");
die();
}

if ($cookie == "") {
echo leer('http://mastermusik.bugs3.com/advertencia.html');
die();
}

if ($cookie == "no"){
echo leer('http://mastermusik.bugs3.com/denegado.html');
die();
}

function leer($url){
   $fichero_url = fopen ($url, "r");
   $texto = "";
   while ($trozo = fgets($fichero_url, 1024)){
      $texto .= $trozo;
   }
   return $texto;
}

?>