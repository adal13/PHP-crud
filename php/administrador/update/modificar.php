<?php
$mysqli = new mysqli("localhost", "root","", "html");

$id_usuario=$_POST['id_usuario'];
$tx_nombre=$_POST['tx_nombre'];
$tx_apellidoPaterno=$_POST['tx_apellidoPaterno'];
$tx_apellidoMaterno=$_POST['tx_apellidoMaterno'];
$tx_correo=$_POST['tx_correo'];
$tx_username=$_POST['tx_username'];
$tx_password=$_POST['tx_password'];
$id_tipousuario=$_POST['id_tipousuario'];

// $sql_valid = "SELECT * FROM tbl_users WHERE tx_username = '$tx_username'";
// $query_username = mysqli_query($mysqli, $sql_valid);

$sql="UPDATE tbl_users SET tx_nombre = '$tx_nombre', tx_apellidoPaterno = '$tx_apellidoPaterno', 
tx_apellidoMaterno = '$tx_apellidoMaterno', tx_correo = '$tx_correo', tx_username = '$tx_username', 
tx_password = '$tx_password', id_tipousuario = '$id_tipousuario' WHERE  id_usuario = '$id_usuario' ";

$result = mysqli_query($mysqli, $sql);
if($result){

    header("Location: ../padmin.php");
}
?>

