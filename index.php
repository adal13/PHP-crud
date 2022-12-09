<?php   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>


    <div class="container-page" id="Container">
        <div class="registro-container" id="RegistroContainer">
            <h3 class="title">Inicio de Sesión</h3>
            <form id="form1" method="post" action="./php/valida.php">
            <div id="datos">

                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" id="inp1" maxlength="30" name="usuario" required>
                        <div class="underline"></div>
                        <label class="name-input"> Usuario </label>
                    </div>
                </div>
                
                <div class="wrapper">
                    <div class="input-data input-line-container">
                        <input class="input-line" id="inp3" maxlength="10" name="password" type="password" required>
                        <div class="underline"></div>
                        <label class="name-input"> Contraseña </label>
                    </div>
                </div>

                <input type="submit" value="Enviar" name="Enviar" class="button-cerrar"/>
                <input type="reset" value="Limpiar" class="button-cerrar"/>  
            </div>
        </form>
        </div>
    </div>
</body>
</html>


<!-- <HTML>

<HEAD>
    <title>pagina de Inicio</title>
</HEAD>

<body class="fondo" width="2500" weight="100">

        <center>
            <img src="./imagenes/ataque de titanes.jpg" width="700" height="150">
        </center>
        <br>
        <div class="imagen"><img src="./imagenes/eren.png" width="300" height="400" ></div>
        <div class="imagen2"><img src="./imagenes/mikasa.png" width="300" height="400" ></div>
        
<style>
    
    #contenedor{width:300px; height:300px; border:2px solid;
    padding-left:3px; padding-top:5px; background:#FFFFFF80; border-radius:30px ;color:white;}

    #form1{font-family:arial, sans-serif; font-size:13px;}

    .fondo{
        background: #0f3443; background: -moz-linear-gradient(left, #0f3443 0%, #34e69f 100%); 
        background: -webkit-linear-gradient(left, #0f3443 0%,#34e69f 100%); 
        background: linear-gradient(to right, #0f3443 10%,#34e69f 150%); 
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0f3443', endColorstr='#34e69f',GradientType=1 );}

    .imagen{float:right ;}
    .imagen2{float:left;}

    #inp1, #inp3{
        background-repeat:no-repeat;
        border: 10;
        width: 203px;
        height: 26px;
        padding-left: 1px;
        padding-top: 6px;
    }

    #inp1{background-image:url(icon/in1.gif)}
    #inp2{background-image:url(icon/in4.gif)}
    #inp3{background-image:url(icon/input7.gif)}
    #inp4{background-image:url(icon/input6.gif)}
    #inp5{background-image:url(icon/in2.gif)}
    #inp8{background-image:url(icon/btninput.gif); cursor:hand;}
</style>


</body>
</HTML> -->