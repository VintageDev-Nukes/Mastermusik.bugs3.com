<?php
session_start();
if (!isset($_SESSION['listo'])
    || $_SESSION['listo'] !== true) {
    header('Location: index.php?action=login'); //Redirige al inicio de sesion en caso de que no tengas la cookie
    exit;
}
?>