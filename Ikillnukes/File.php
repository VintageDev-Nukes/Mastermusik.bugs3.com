<?php

echo "<despiste>";

$pass = $_GET['pass'];
$get_pass= $_GET['get_pass'];

if(empty($pass) && empty($get_pass)){$pass = "";
//echo "No puede acceder a esta página.";
echo $_SERVER['HTTP_USER_AGENT'];}

if(empty($get_pass)){$get_pass = "";}

if($pass=="probando"){echo "Algo";}

if($get_pass=="<!--"){echo "Caca";
if(stristr($_SERVER['HTTP_USER_AGENT'],'40')){echo "Hola";}}

?>