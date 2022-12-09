<?php

$mysqli = new mysqli("localhost", "root", "", "html");

$id_usuario = $_GET['id']; 
//codigo de editar, asi com el delete de eliminar
$query = "SELECT * FROM tbl_users WHERE id_usuario = '$id_usuario' ";

$query = mysqli_query($mysqli, $query);
$row=mysqli_fetch_array($query);
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

    <div class="container-page" id="Container">
        <div class="registro-container" id="RegistroContainer">
            <h3 class="title">Modificar Datos</h3>
            <form action='./modificar.php' method='POST'>
                
                <input class="input-line" type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $row['id_usuario']; ?>" required>
                
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" type="text" name="tx_nombre" id="tx_nombre" value="<?php echo $row['tx_nombre']; ?>" required>
                        <div class="underline"></div>
                        <label for="name" class="name-input"> Nombre: </label>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" type="text" name="tx_apellidoPaterno" id="tx_apellidoPaterno" value="<?php echo $row['tx_apellidoPaterno']; ?>" required>
                        <div class="underline"></div>
                        <label class="name-input"> Apellido Paterno: </label>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" type="text" id="tx_apellidoMaterno" name="tx_apellidoMaterno" value="<?php echo $row['tx_apellidoMaterno']; ?>" required>
                        <div class="underline"></div>
                        <label class="name-input"> Apellido Materno: </label>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" type="email" id="tx_correo" name="tx_correo" value="<?php echo $row['tx_correo']; ?>"required>
                        <div class="underline"></div>
                        <label class="name-input"> Correo Electronico: </label>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" type="text" id="tx_username" name="tx_username" value="<?php echo $row['tx_username']; ?>" required>
                        <div class="underline"></div>
                        <label class="name-input"> Nombre de Usuario: </label>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" type="password" id="tx_password" name="tx_password" value="<?php echo $row['tx_password']; ?>" required>
                        <div class="underline"></div>
                        <label class="name-input"> Contraseña: </label>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <select class="input-data input-line color-text" name="id_tipousuario" id="id_tipousuario" required>
                            <?php if($row['id_tipousuario'] == 1){?>
                                <option class="option-user" value="1">Administrador</option>
                                <option class="option-user" value="2">Usuario Normal</option>
                            <?php } if($row['id_tipousuario'] == 2){?>
                                <option class="option-user" value="2">Usuario normal</option>
                                <option class="option-user" value="1">Administrador</option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <input type="submit" class="button-save" value="Guardar">
                <input type="button" class="button-save" value="Cerrar" onclick="location.href='../padmin.php'"> 

            </form>

        </div>
    </div>

</body>
</html>

<!-- <div class="wrapper">
    <div class="input-data">
        <input type="text" required>
        <div class="underline"></div>
        <label> Name </label>
    </div>
</div> -->