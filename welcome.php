<?php
// Iniciar la sesión
session_start();
 
// Comprobación que el usuario este conectado
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a nuestro sitio.</h1>
        
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-primary">Cambia tu contraseña</a>
        <a href="logout.php" class="btn btn-primary">Cierra la sesión</a>
        
    </p>


</body>
</html>