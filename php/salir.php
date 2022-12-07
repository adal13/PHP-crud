<?php
//reanudamos la sesion
session_start();
//literalmente la destruimos
session_destroy();
//redireccionamos a index.php (al inicio de sesion)
header("location: ../index.php");
?>