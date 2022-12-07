<?php

@session_start();

//conecto con la base de datos
$conn = mysqli_connect("localhost","root","");
//selecciono la BBDD
mysqli_select_db($conn, "html") or die ("no se encontró la BD");

$uid = "";
$usuario=$_POST['usuario'];
$password=strip_tags($_POST['password']);
$_SESSION['existe']="NO";

$sql = "SELECT * FROM tbl_users INNER JOIN ctg_tipousuario
ON tbl_users.id_TipoUsuario = ctg_tipousuario.id_TipoUsuario
WHERE tbl_users.tx_username = '".$usuario."'
AND tbl_users.tx_password = '".$password."' ";

// echo '<script>alert("'.$sql.'")</script>';

$result =mysqli_query ($conn, $sql);

$uid = "";

//si existe al menos una fila

if( $fila=mysqli_fetch_array($result) )

{

    //obtener el Id del usuario y la categoria de usuario en la BD
    //los siguientes datos se obtienen directamente de la consulta
    $uid = $fila['id_usuario'];
    $datousuario = $fila['tx_username'];
    $datonombre = $fila['tx_nombre'];
    $catusr = $fila['id_tipousuario'];
    $datopass = $fila['tx_password'];
    $tipousuario = $fila['tx_tipousuario'];

    $_SESSION['existe']= 'SI';

    //crear variables que guarden datos importantes
    //del usuario para tenerlos siempre disponibles.

//se captura el valor de la variable de id del usuario
$_SESSION['id_usuario']= $uid;
//se captura el valor de la variable del nombre de usuario
$_SESSION['tx_username'] = $datousuario;

//se captura el valor de la variable de la contraseña
$_SESSION['tx_password'] = $datopass;
//se captura el valor de la Id que pertenece a la categoria de usuario
$_SESSION['id_TipoUsuario'] = $catusr;
//se captura el valor del tipo de usuario de la categoria de usuario
$_SESSION['tx_TipoUsuario'] = $tipousuario;
$_SESSION['tx_nombre'] = $datonombre;


if($catusr==1) {

    $pagina = '../php/administrador/padmin.php';

echo("<script>alert('Bienvenido a tu sesion: " . $usuario . 
" " . $tipousuario . ", has clic en aceptar para continuar');");

//se captura el valor de la variable de id del usuario
$_SESSION['id_usuario']= $uid;
//se captura el valor de la variable del nombre de usuario
$_SESSION['tx_username'] = $datousuario;
//se captura el valor de la variable de la contraseña
$_SESSION['tx_password'] = $datopass;
//se captura el valor de la Id que pertenece a la categoria de usuario
$_SESSION['id_TipoUsuario'] = $catusr;
$_SESSION['tx_nombre'] = $datonombre;

//redirecciona a la pagina correspondiente al tipo de usuario
echo("location.replace('".$pagina."');");
echo("</script>");

}

elseif($catusr==2){

    $pagina = '../php/usuario/pusuario.php';

echo("<script>alert('Bienvenido a tu sesión: " . $usuario . 
" " . $tipousuario . ", has clic en Aceptar para continuar');");

//se captura el valor de la variable de id del usuario
$_SESSION['id_usuario'] = $uid;
//se captura el valor de la variable del nombre de usuario
$_SESSION['tx_username'] = $datousuario;
//se captura el valor de la variable de la contraseña
$_SESSION['tx_password'] = $datopass;
//se captura el valor de la categoria de usuario
$_SESSION['id_TipoUsuario'] = $catusr;
$_SESSION['tx_nombre'] = $datonombre;

//redirecciona a la pagina correspondiente al tipo de usuario
echo("location.replace('".$pagina."');");
echo("</script>");

}

}

else{
    echo("<script>alert('usuario no encontrado...');");
    echo("location.replace('../index.php');");
    echo("</script>");
}

?>