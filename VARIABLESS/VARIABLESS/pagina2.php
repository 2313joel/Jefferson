<?php
session_start();
$_SESSION['usuario']=$_REQUEST['campousuario'];
$_SESSION['contraseña']=$_REQUEST['campoclave'];
?>
<html>
<head>
<title>variables de sesion</title>
</head>
<body>
Los datos se registraron correctamente<br>
se almasenaron 2 variables.<br><br>
Ir a la &nbsp;<a href="pagina3.php">pagina3.php</a> &nbsp; para mostrarlas
</body>
</htm