<?php   
?>
<HTML>

<HEAD>
    <title>pagina de Inicio</title>
</HEAD>

<body class="fondo" width="2500" weight="100">

        <center>
            <!--la siguiente linea de codigo inserta una imagen-->
            <img src="./imagenes/ataque de titanes.jpg" width="700" height="150">
        </center>
        <br>
        <div class="imagen"><img src="./imagenes/eren.png" width="300" height="400" ></div>
        <div class="imagen2"><img src="./imagenes/mikasa.png" width="300" height="400" ></div>
        
<!--Para ofrecer un contorno-->
<style>
    
    #contenedor{width:300px; height:300px; border:2px solid;
    padding-left:3px; padding-top:5px; background:#FFFFFF80; border-radius:30px ;color:white;}

    #form1{font-family:arial, sans-serif; font-size:13px;}

    .fondo{
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#0f3443+0,34e69f+100 */ 
        background: #0f3443; /* Old browsers */ background: -moz-linear-gradient(left, #0f3443 0%, #34e69f 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(left, #0f3443 0%,#34e69f 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right, #0f3443 10%,#34e69f 150%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ 
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0f3443', endColorstr='#34e69f',GradientType=1 ); /* IE6-9 */ }

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

<center>
    <div aling="center" height="10%">
    <div id="contenedor" align="center">

    <font face="Comic Sans" size="14" color="white">
        <p> Iniciar sesi&oacute;n</p> </font>

        <form id="form1" method="post" action="./php/valida.php">
            <div id="datos">
                usuario:<br/>
                <input title="teclee un nombre de usuario" id="inp1"
                maxlength="30" name="usuario"
                placeholder="solo letras y numeros" required/><br/>

                password:<br/>
                <input title="se necesita un password" id="inp3"
                maxlength="10" name="password" type="password"
                placeholder="Teclee su contrase&ntilde;a" required/>
                <br/>

                <br/>
                <div style="float: center; width: 130px">
                    <input type="submit" value="Enviar" name="Enviar"/>
                    <input type="reset" value="Limpiar"/>
                </div>  
            </div>
        </form>
    </div>
    </div>
</center>
</body>
</HTML>