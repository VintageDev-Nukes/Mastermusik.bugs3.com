<?php 
if(!session_id() == 'listo') {
session_start(); 
}
require 'check.php'; //continua en el siguiente bloque

// CONEXIÓN A LA BASE DE DATOS
require_once(dirname(__FILE__) . '/Settings.php'); //Aquí se saca las strings de conexión
mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error()); //Aquí se conecta
mysql_select_db ($db_name); //Aquí se selecciona la BD
?>
<style>
.linka {color:#fff;text-decoration:none;}
</style>
<div id="content" style="background: url('img/fondot.png') 0 0 repeat fixed; width:100%; height:100%; position:fixed; left:0; top:0; z-index:20; display:none;">

<img style="position:absolute; right: 50%; top: 50%; margin-right: -424px; margin-top: -324px; z-index:30;" src="img/RedCross.png" onclick='hide("content")' />

<div id="boxt" class="transbox" style="z-index:25; position: absolute; left: 50%; top: 50%; width: 800px; height: 600px; margin-top: -300px; margin-left: -400px; overflow: auto; background: #fff; border: 1px #000 solid;">
<iframe src="formulario.php" id="frame" style="width:100%;height:100%;border:none;"></iframe>
</div>
</div>
<script type="text/javascript">
    function show(id) {
      document.getElementById(id).style.display = 'block';
    }

    function hide(id) {
      document.getElementById(id).style.display = 'none';
    }

  </script>
<a href="logout.php" style="float:right;font-size:12px;" class="linka">Cerrar sesión</a>
<br><h3><a href="#" onclick='show("content")' class="linka" onlick="document.getElementById('frame').src = 'formulario.php';">+ Añadir demo</a><br>
<a href="#" style="color:#fff;text-decoration:none;" onclick="show('borrar')">- Borrar Demo</a></h3>

<div id="borrar" style="display:none;color:#fff;">
<?

$query = "SELECT * FROM demo ORDER BY id ASC"; //aquí se lee * (todo) de demo
$result = mysql_query($query) or die(mysql_error()); //Aquí se muestra el resultado que está listo para ser mostrado con un while linea: 19

while($rs=mysql_fetch_array($result))  {

echo ''.$rs['id'].'. '.$rs['categoria'].' - <a href="#" style="color:#fff; text-decoration:none;" onclick="delMusica(\''.$rs['id'].'\');">Quitar</a><br>';

}

?>
</div>

<script type="text/javascript">
function delMusica(id) {
    if (window.confirm("\u00BFDesea eliminar el registro seleccionado?")) {
        window.location = "delete.php?action=del&id="+id;   
    }
}
</script>
