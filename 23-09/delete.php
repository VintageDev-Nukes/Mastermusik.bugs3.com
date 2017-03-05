<?php 
session_start(); 
require 'check.php'; //continua en el siguiente bloque
require("funciones.php");

require_once(dirname(__FILE__) . '/Settings.php'); //Aquí se saca las strings de conexión
$conexion = mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error()); //Aquí se conecta
mysql_select_db($db_name, $conexion);
mysql_query("SET NAMES 'utf8'");

#$id = $_GET["id"];
#$categoria = $_GET["categoria"];
#$zippyid= $_GET["zippyid"];
#$zippywww = $_GET["zippywww"];
#$tracklist = $_GET["tracklist"];
#$action = $_GET["action"];

$id = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");
 
if ($action == "del") {
	$sql = "DELETE FROM demo WHERE id = ".sqlValue($id, "int");
    #$sql = "DELETE FROM `u849712608_musik`.`demo` WHERE `demo`.`id` = '".$id;
    #."' AND `demo`.`categoria` = '".$categoria."'' AND `demo`.`zippyid` = '".$zippyid."'' AND `demo`.`zippywww` = '".$zippywww."'' AND `demo`.`tracklist` = '".$tracklist."'"
    mysql_query($sql, $conexion);
    header("location: index.php?action=admin");
}

?>