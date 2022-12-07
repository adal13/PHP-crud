<?php
$mysqli = new mysqli ('localhost', 'root', '', 'html');
$id_usuario= $_GET['id'];
$delete = "DELETE FROM  tbl_users WHERE id_usuario= '$id_usuario'";
$result = mysqli_query($mysqli, $delete);
if ($result){
    header("Location:padmin.php");
}

?>