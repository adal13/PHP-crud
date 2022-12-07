<?php
//invalida el copiar y pegar URL si no hay sesion reenvia a la pagina de inicio
@session_start();
if($_SESSION['existe'] != 'SI'){
    header('Location:../../index.php');
    exit(0);

session_start();
if(!isset($_SESSION['existe']) || ($_SESSION['existe'] != 'SI')){
    header('Location: ../../index.php');
    exit(0);

}
}
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title> Inicio Usuario </title>
    </head>
    <body bgcolor="#9bfae0">
    <center>
    <?php
    $time = time(); echo "la fecha actual es: " . date("d-m-y");
    ?>

    <BR>
    <form action="../salir.php" method="post">
        <input type="SUBMIT" value="Cerrar Sesio&oacute;n" />
    </form>
    </div>

    <br> <br>
    Bienvenido Administrador
    <br>
    <?php
    $usuarioactual=$_SESSION['tx_username']; echo "",$usuarioactual,""
    ?>
    </center>

    <!--hoja de estilo-->
    <style>
        #div{
            background:black;
        }
    </style>
</body>
</html>