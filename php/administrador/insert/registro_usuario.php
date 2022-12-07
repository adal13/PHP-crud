<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="../../../css/registro_usuario.css">
</head>
<body>
    
<div class="container-page" id="Container">
    <div class="registro-container" id="RegistroContainer">
        <h3 class="title"> Registros de Usuarios</h3>
            
            <form action='./agregar.php' method='POST'>

                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" id="tx_nombre" type="text" name="tx_nombre" required/>
                        <div class="underline"></div>
                        <label class="name-input" for="name">Nombre:</label>
                    </div>
                </div>
    
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" id="tx_apellidoPaterno" type="text" name="tx_apellidoPaterno" required/>
                        <div class="underline"></div>
                        <label class="name-input" for="name">Apellido Paterno:</label>
                    </div>
                </div>
    
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" id="tx_apellidoMaterno" type="text" name="tx_apellidoMaterno" required/>
                        <div class="underline"></div>
                        <label class="name-input" for="name">Apellido Materno:</label>
                    </div>
                </div>
    
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" id="tx_correo" type="emai" name="tx_correo" required/>
                        <div class="underline"></div>
                        <label class="name-input" for="name">Correo Electronico</label>
                    </div>
                </div>
                
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" id="tx_username" type="text" name="tx_username" required/>
                        <div class="underline"></div>
                        <label class="name-input" for="name">Nombre de Usuario:</label>
                    </div>
                </div>
    
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" type="password" id="tx_password" name="tx_password" required/>
                        <div class="underline"></div>
                        <label class="name-input" for="name">Contraseña:</label>
                    </div>
                </div>
    
    
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <select class="input-data input-line color-text" name="id_tipousuario" id="id_tipousuario" required>
                            <option value="1" class="option-user">Administrador</option>
                            <option value="2" class="option-user" selected>Usuario normal</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Guardar" name="btnSave" class="button-save">
                <input type="button" value="Cerrar" onclick="location.href='../padmin.php'" name="btnSave" class="button-save"> 
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