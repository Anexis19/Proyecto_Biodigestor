<?php

    include "../conexion.php";
      
    // Validacion de inicio de session
    session_start();
    if ($_SESSION["autentication"] != "SIx3")
        {
        echo "Prueba seguridad";
        header('Location: inicio_sesion.php?message=3');
        }
    else{

    }

    // Establecimiento de tiempo de vida de una session
    $inactivo = 60;
    if(isset($_SESSION['tiempo'])){
        
        $vida_session = time() - $_SESSION['tiempo'] ;
        
        if($vida_session > $inactivo){
        session_destroy();
        header("Location: inicio_sesion.php?message=4");
        }
    }
    $_SESSION['tiempo'] = time();

    $nombre_admin   = $_SESSION["nombre_usuario"];
    $id_admin       = $_SESSION["id_usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400;1,500;1,900&family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_admin.css">
    <title>Admin</title>
</head>
<body>

<div id="particles-js"></div>
<!-- CABECERA DE TRABAJO -->
<header>

    <div class="contenedor_principal">
        <div class="contenedor_logo">
            <a href="../index.html"><img id="imagen_logo" src="../images/logo.png" alt="Error al cargar la imagen"></a>    
        </div>
        <div class="contenedor_nombre_adm">
            <span> BIEVENIDO </span>
            <span>
                <?php
                    echo $nombre_admin;
                ?>

            </span>
        </div>
        <div class="contenedor_admin">
            hola
            <?php 

           

            echo $nombre_admin;
            echo $id_admin;

            ?>
        </div>
    </div>

</header>



<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>