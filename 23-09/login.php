<?php
session_start(); //crea la cookie
if(isset($_POST['login']))
{
 
$completa = $_POST['pass'];
$comparar = md5 ($completa); //codifica lo escrito en md5
$clave = 'mastermusik86'; //Reemplazar por tu contraseña
$final = md5 ( $clave );  //la codifica md5
if ( $comparar == $final ) {
    $_SESSION['listo'] = true;
    header('Location: index.php?action=admin'); //redirige a la pagina despues de inicias sesion
    exit;
} else
{
?>
<script type="text/javascript">
<!--
alert('Contraseña Incorrecta')
//-->
</script>
<?php
}
}
//continua en el siguiente bloque
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Identificate </title>
</head>
<body>
<center>
<h3 style="color:#fff;">Contraseña:<h3>
<form method="post" action="">
<input type="password" style="text-align:center;" name="pass"><br>
<input type="submit" name="login" value="Iniciar sesión">
</form>
</center>
</body>
</html>