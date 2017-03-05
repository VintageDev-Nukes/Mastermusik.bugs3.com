<?php 
session_start(); 
require 'check.php'; //continua en el siguiente bloque
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insertar Demo</title>
<style>body {font-family:arial;margin:0;width:100%;height:100%;}</style>

<body>
<form id="form1" name="form1" method="post" action="envia.php" style="padding:20px;">
<b>Categoría:</b><br>
<SELECT NAME="cat"> 
<OPTION selected disabled>Por favor, escoja un género de música</OPTION>
<OPTION disabled></OPTION>
<OPTION VALUE="50's">50's</OPTION>
<OPTION VALUE="60's">60's</OPTION>
<OPTION VALUE="70's">70's</OPTION>
<OPTION VALUE="80's">80's</OPTION>
<OPTION VALUE="90's">90's</OPTION>
<OPTION VALUE="Dance">Dance</OPTION>
<OPTION VALUE="Electro">Electro</OPTION>
<OPTION VALUE="Flamenco">Flamenco</OPTION>
<OPTION VALUE="Folk">Folk</OPTION>
<OPTION VALUE="Happy Harcore">Happy Harcore</OPTION>
<OPTION VALUE="Hardcore">Hardcore</OPTION>
<OPTION VALUE="Hardstyle">Hardstyle</OPTION>
<OPTION VALUE="Hard-Techno-Progressive">Hard-Techno-Progressive</OPTION>
<OPTION VALUE="Hard-Trance">Hard-Trance</OPTION>
<OPTION VALUE="Hip-hop (English)">Hip-hop (English)</OPTION>
<OPTION VALUE="Hip-hop (Spanish)">Hip-hop (Spanish)</OPTION>
<OPTION VALUE="Jumpstyle">Jumpstyle</OPTION>
<OPTION VALUE="Makina">Makina</OPTION>
<OPTION VALUE="Newstyle">Newstyle</OPTION>
<OPTION VALUE="Poky">Poky</OPTION>
<OPTION VALUE="Pop (English)">Pop (English)</OPTION>
<OPTION VALUE="Pop (Spanish)">Pop (Spanish)</OPTION>
<OPTION VALUE="Progressive">Progressive</OPTION>
<OPTION VALUE="Psychodelic">Psychodelic</OPTION>
<OPTION VALUE="Reggaeton">Reggaeton</OPTION>
<OPTION VALUE="Rock (English)">Rock (English)</OPTION>
<OPTION VALUE="Rock (Spanish)">Rock (Spanish)</OPTION>
<OPTION VALUE="Techno">Techno</OPTION>
<OPTION VALUE="Trance">Trance</OPTION>
<OPTION VALUE="UK Hardcore">UK Hardcore</OPTION>
</SELECT><br><br>
<b>Url:</b><br>
<input type="text" name="url" id="url" maxlength="100" size="30" /><br><br>
<b>Tracklist:</b><br>
<textarea name="track" maxlength="5000" rows="5" cols="30"></textarea><br><br>
<font size="3px">Captcha:</font><br>
<img src="captcha.php"/><br>
<input type="text" name="vercode" /><br><br>
<input type="submit" value="Enviar" />
</form>
</body>
</html>