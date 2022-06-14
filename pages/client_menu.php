<?php

    include "../conexion.php";

    // Validacion de inicio de session
    session_start();
    $autentication      = $_SESSION['TIPO_USUARIO'];
    $nombre_cliente     = $_SESSION['NOM_USUARIO'];
    $id_cliente         = $_SESSION['ID_USUARIO'];

    if($autentication = '' || $autentication == null || $autentication == 2 ){
        header('Location: inicio_sesion.php?message=3');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400;1,500;1,900&family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>
    <title>Client</title>

</head>
<body>
<!-- CONTENEDOR DE PARTICULAS -->
<div id="particles-js"></div>

<!-- CABECERA DE TRABAJO -->
<header>

    <div class="contenedor_principal">
        <div class="contenedor_logo">
            <a href="../index.php"><img id="imagen_logo" src="../images/logo.png" alt="Error al cargar la imagen"></a>
        </div>
        <div class="contenedor_nombre_clt">
            <span> BIENVENIDO </span>
            <span>
                <?php
                    echo $nombre_cliente;
                ?>

            </span>
        </div>
        <div class="contenedor_clt">
            Nombre de usuario:
            <span class="info_clt">
                <?php
                    echo " $nombre_cliente";
                ?>
            </span><br>
            <span>
                ID usuario:
            </span>
            <span class="info_clt">
                <?php
                    echo " $id_cliente";
                ?>
            </span>


            <div class="contenedor_cerrar_sesion" >
                <button class="btn-cierre-sesion"><a href="../logic/cerrar_sesion.php">Cerrar Sesion</a></button>
            </div>
        </div>
    </div>
</header>

<!-- BARRA DE NAVEGACION -->
<div class="contenedor_menu">

    <div class="contenedor_listas">
        <ul>
            <li class="btn-inicio-go_home"><a href="../index.php">Menu Principal</a></li>
            <li> <a href="suscription.php">Suscripciones</a>  <i class="fa fa-angle-down"></i>
                <ul>
                    <li>Premiun</li>
                    <li>Basico</li>
                </ul>
            </li>
            <li class="btn-inicio-go_catalogo"><a href="">¿Quienes somos?</a></li>

        </ul>
    </div>
</div>



<!-- AGREGAR PARTICULAS -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>