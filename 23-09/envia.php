<?
require_once(dirname(__FILE__) . '/Settings.php');

$url = $_REQUEST['url'];

$parse = parse_url($url);
$domain = $parse['host'];
$file = $parse['path'];  

function reem($texto1) {

//Rememplazamos caracteres especiales latinos minusculas
$find = array('.zippyshare.com', 'www', '/v/', '/file.html');
$repl = array('','','','');
$texto1 = str_replace($find, $repl, $texto1);

return $texto1;

} 

function reem2($cadena) {
   $buscarRegex = array('/^(\d+\.)/mi'); // This means match any digit(s) followed by a dot at the beginning of each line. Note the m modifier
   $reemplazo = array('<b>$1</b>'); // replace should be with group 1, not some vague $i
   $mag = preg_replace($buscarRegex, $reemplazo, $cadena);
   return $mag; // return value: fixed
}

function reem3($texto1) {

//Rememplazamos caracteres especiales latinos minusculas
$find = array("'");
$repl = array("\'");
$texto1 = str_replace($find, $repl, $texto1);

return $texto1;

} 

function reem4($texto1) {

//Rememplazamos caracteres especiales latinos minusculas
$find = array("[\n|\r|\n\r]");
$repl = array("");
$texto1 = str_replace($find, $repl, $texto1);

return $texto1;

} 

$categoria = reem3($_REQUEST['cat']);
$zippyid = reem($file);
$zippywww = reem($domain);
$tracklist = reem3($_REQUEST['track']);
$tracklist = nl2br($tracklist);
$tracklist = reem2($tracklist);
$tracklist = reem4($tracklist);

session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
echo "<script>alert('El c\u00f3digo es err\u00f3neo.');
window.history.back();</script>";
} else { 
mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error());
mysql_select_db ($db_name);
mysql_query ("SET NAMES 'utf8'");
$query="INSERT INTO demo (categoria, zippyid, zippywww, tracklist) VALUES ('$categoria','$zippyid','$zippywww', '$tracklist')";
mysql_query($query) or die ('Error: ' . mysql_error());
header("location:okay.html");
}; 

?>