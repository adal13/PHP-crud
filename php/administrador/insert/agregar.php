<?php
$mysqli = new mysqli("localhost", "root","", "html");

$tx_nombre=$_POST['tx_nombre'];
$tx_apellidoPaterno=$_POST['tx_apellidoPaterno'];
$tx_apellidoMaterno=$_POST['tx_apellidoMaterno'];
$tx_correo=$_POST['tx_correo'];
$tx_username=$_POST['tx_username'];
$tx_password=$_POST['tx_password'];
$id_tipousuario=$_POST['id_tipousuario'];

$sql_valid="SELECT * FROM tbl_users WHERE tx_username = '$tx_username'";
$query_username=mysqli_query($mysqli, $sql_valid);
if($query_username ){
    $user=mysqli_num_rows($query_username);
    print_r($user);
    
    if($user == 1){
        echo 
            "<script>
                alert('Usuario ya existe');
                window.location= 'registro_usuario.php'
            </script>";
    }else{
        $sql= "INSERT INTO tbl_users (id_usuario, tx_nombre, tx_apellidoPaterno, 
        tx_apellidoMaterno, tx_correo, tx_username, tx_password, id_tipousuario, dt_registro) 
        VALUES (0, '$tx_nombre','$tx_apellidoPaterno','$tx_apellidoMaterno','$tx_correo','$tx_username','$tx_password','$id_tipousuario', now())";
        $query=mysqli_query($mysqli, $sql);
        
        if($query){
            header("Location:../padmin.php");
        }
        else{
        
        }
    }
}else{
    echo 'Las datos se insertaran a la base de datos';
}
?>