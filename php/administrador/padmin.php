<?php
    $mysqli=new mysqli('localhost', 'root', '', 'html');
    $sql="SELECT * FROM tbl_users ORDER BY tx_nombre ASC";
    
    if(isset($_POST['buscar'])){
        $nombre=$_POST['nombre'];
        $sql="SELECT * FROM tbl_users WHERE tx_nombre LIKE '%$nombre%' ORDER BY tx_nombre ASC";
    }
    
    $query=mysqli_query($mysqli, $sql);
?>

<?php
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../../css/padmin.css" >
</head>
<body>
    <div class="container">
        <div class="navbar">
            <?php
                echo 'Bienvenido Administrador: ';
                $usuarioactual=$_SESSION['tx_nombre']; echo " ",$usuarioactual,"";
            ?>
            <br>
            <?php 
            date_default_timezone_set('America/Mexico_City');
            $time = time(); echo "La fecha actual es: " . date('m-d-Y h:i a', time()); 
            ?>
            <!-- <img src="./riama-logo.png" class="logo" alt="Main Logo"> -->

            <ul>
                <li><a href="./insert/registro_usuario.php">Registro de usuario</a></li>
                <li><a href="../fpdf/reporte.php" target="_black">Reporte</a></li>
                <li><a href="#">Contactanos</a></li>
                <li><a href="../salir.php">Cerrar Sesion</a></li>
            </ul>
        </div>
    </div>

    <!-- buscar los nombre de forma ascendente -->
    <div class="form-buscar">
        <form action="padmin.php"method="post">
            <div>
                <input class="name_buscar" type="text" name="nombre">
                <input class="button-buscar" type="submit" value="Buscar" name="buscar">
            </div>
        </form>
    </div>
    <div class="cont-table">
        <div class="container-tab">
            <table>
                <thead class="color-table">
                    <tr class="title-name">
                        <!-- <th>No°</th> -->
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo Electronico</th>
                        <th>Nombre de Usuario</th>
                        <th>Contraseña</th>
                        <th>Tipo de Usuario</th>
                        <th>Operacion</th>
                        <!-- <th></th>    -->
                    </tr>
                </thead>
            
                
                <?php
                if($result = $mysqli->query($sql)){ 
                    while($row = $result->fetch_assoc())
                    {?>
                    <tbody>
                        <tr>
                            <?php $id=$row ['id_tipousuario']?>
                            <?php $id_usuario=$row ['id_usuario']?>
                            <?php $usuario = $row['tx_username'] ?>
                            <!-- <td><?php echo $row ['id_usuario'] ?></td> -->
                            <td><?php echo $row ['tx_nombre']?></td>
                            <td><?php echo $row ['tx_apellidoPaterno']?></td>
                            <td><?php echo $row ['tx_apellidoMaterno']?></td>
                            <td><?php echo $row ['tx_correo']?></td>
                            <td><?php echo $row ['tx_username']?></td>
                            <td><?php echo $row ['tx_password']?></td>
                            <td><?php $row ['id_tipousuario']?><?php if($id == 1){echo 'Administrador';} if($id == 2){echo 'Usuario Normal';};?></td>
                            <td><button class="botton-editar boton"><a class="text-ee" href="<?='./update/editar.php?id=' . $id_usuario ?>">Editar</a></button></td>
                            <td><button class="botton-eliminar boton"><a class="text-ee" href="<?='./eliminar.php?id=' . $id_usuario ?>">Eliminar</a></button></td>
                        </tr>
                    </tbody>
                <?php }   
                }?>
    
            </table>
        </div>
    </div>

</body>
</html>