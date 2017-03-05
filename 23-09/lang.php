<?php

$lang = $_GET['lang'];
$idioma = $_COOKIE['idioma'];

if (empty($lang)){
if(empty($idioma)) {$idioma = "es";}
include_once($idioma.".php");
}

if ($lang == "es"){
if (isset($idioma)) {
setcookie("idioma", $idioma, time() - 60*60*24*365*10);
}
setcookie("idioma", "es", time() + 60*60*24*365*10);
include_once("es.php");
header("Location: index.php");
}

if ($lang == "en"){
if (isset($idioma)) {
setcookie("idioma", $idioma, time() - 60*60*24*365*10);
}
setcookie("idioma", "en", time() + 60*60*24*365*10);
include_once("en.php");
header("Location: index.php");
}

if (empty($idioma)) {
include_once("es.php");
}

if ($idioma == "es"){
include_once("es.php");
}

if ($idioma == "en") {
include_once("en.php");
}

?>