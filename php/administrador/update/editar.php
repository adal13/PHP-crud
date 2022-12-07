<?php

$mysqli = new mysqli ("localhost", "root", "", "html");

$id_usuario = $_GET['id']; 
//codigo de editar, asi com el delete de eliminar
$query = "SELECT * FROM tbl_users WHERE tbl_users.id_usuario = '$id_usuario' ";

//se valida la consulta que ejecutaremos
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        $id_usuario = $row['id_usuario'];
        $tx_nombre = $row['tx_nombre'];
        $tx_apellidoPaterno=$row['tx_apellidoPaterno'];
        $tx_apellidoMaterno=$row['tx_apellidoMaterno'];
        $tx_correo=$row['tx_correo'];
        $tx_username=$row['tx_username'];
        $tx_password=$row['tx_password'];
        $id_tipousuario=$row['id_tipousuario'];
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Informacion</title>
    <link rel="stylesheet" href="../../../css/editar.css">
</head>
<body>
<form action='modificar.php' method='POST' class="form_container" class="form">
    <h3 class="form_title"> Modificar Datos</h3>
    <!-- <div id="contenedor" > -->

        
            <div class="form_container">

                <div class="form_group">
                <label for="name" class="form_label">Nombre:</label>
                <input class="form_input" name="tx_nombre"
                type="text"  value="<?php echo $tx_nombre;?>" required placeholder=" "/>
                <span class="form_line"></span>
                </div>

                <div class="form_group">
                <label for="name" class="form_label">Apellido Paterno:</label>
                <input class="form_input" name="tx_apellidoPaterno" id="tx_apellidoPaterno"
                type="text"  value="<?php echo $tx_apellidoPaterno;?>" required placeholder=" "/>
                <span class="form_line"></span>
            </div>
                
                <div class="form_group">
                <label for="name" class="form_label">Apellido Materno:</label>
                <input class="form_input" id="tx_apellidoMaterno"
                type="text" name="tx_apellidoMaterno" value="<?php echo $tx_apellidoMaterno;?>" required placeholder=" "/>
                <span class="form_line"></span>
                </div>

                <div class="form_group">
                <label for="name" class="form_label">E-mail:</label>
                <input class="form_input" id="tx_correo"
                type="emai" name="tx_correo" value="<?php echo $tx_correo;?>"required placeholder=" "/>
                <span class="form_line"></span>
                </div>

                <div class="form_group">
                <label for="name" class="form_label">Nombre de Usuario:</label>
                <input class="form_input" id="tx_username" name="tx_username" value="<?php echo $tx_username?>" required placeholder=" "/>
                <span class="form_line"></span>
                </div>

                <div class="form_group">
                <label for="name" class="form_label">Password:</label>
                <input class="form_input" type="password" id="tx_password" name="tx_password" value="<?php echo $tx_password;?>" required placeholder=" "/>
                <span class="form_line"></span>
                </div>

                <select name="id_tipousuario" id="id_tipousuario">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario normal</option>
                </select>

                <input class="form_submit" type="submit" value="Guardar" name="btnSave">
                <input class="form_submit" type="button" value="Cerrar" onclick="location.href='../padmin.php'" name="btnSave"> 

            </div>
    </form>
</body>
</html>