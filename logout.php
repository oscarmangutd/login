<?php
// Iniciar conexion
session_start();
 
// Desactivar todas las variables de sesión
$_SESSION = array();
 
// Finalizar la sesión
session_destroy();
 
// Redirigir a la pagina del login
header("location: login.php");
exit;
?>