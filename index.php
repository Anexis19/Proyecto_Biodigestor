<?php
    include "conexion.php";

    session_start();
    error_reporting(0);
    $bandera = false;
    $autentication  = $_SESSION['TIPO_USUARIO'];
    $nombre_cliente = strtoupper($_SESSION['NOM_USUARIO']);
    $id_cliente     = strtoupper($_SESSION['ID_USUARIO']);

    if($autentication == 1 || $autentication == 2){
        $bandera = true;
    }
    else{
        $bandera = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400;1,500;1,900&family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>
    <!-- Estilos del carousel -->
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.min.css">
    <title>Automatic Life Gas</title>
</head>
<body>
    <div id="particles-js"></div>

    <!-- CABECERA DE TRABAJO -->
    <header>
        <div class="contenedor_principal">
            <div class="contenedor_logo">
                <a href="index.php"><img id="imagen_logo" src="images/logo.png" alt="Error al cargar la imagen"></a>
            </div>

            <?php
                if ($bandera == false){
            ?>

                <div class="contenedor_frase">
                    <span>Controla y monitoriza tu biodigestor al alcance de unos pocos clicks </span>
                </div>
                <div class="contenedor_botones">
                    <div class="contenedor_botton_inicio">
                        <button type="" class="btn-inicio-sesion"> <a href="pages/inicio_sesion.php">Inicio de Sesion</a></button>
                    </div>
                    <div class="contenedor_botton_registro">
                        <button type="" class="btn-inicio-sesion"> <a href="pages/form_register.php">Registrarse</a> </button>
                    </div>
                </div>
            <?php
                }
                else{
            ?>
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
                    <span class="info_admin">
                        <?php
                            echo " $id_cliente";
                        ?>
                    </span>


                    <div class="contenedor_cerrar_sesion" >
                            <button class="btn-cierre-sesion"><a href="logic/cerrar_sesion.php">Cerrar Sesion</a></button>
                    </div>
                </div>
            <?php
                }
            ?>


        </div>
    </header>

    <!-- BARRA DE NAVEGACION -->
    <div class="contenedor_menu">

        <div class="contenedor_listas">
            <ul>
                <li class="btn-inicio-go_home"><a href="index.php">Menu Principal</a></li>
                <li> <a href="pages/suscription.php">Suscripciones</a>  <i class="fa fa-angle-down"></i>
                    <ul>
                        <li>Premiun</li>
                        <li>Basico</li>
                    </ul>
                </li>
                <li class="btn-inicio-go_catalogo"><a href="">¿Quienes somos?</a></li>

                <?php
                    if($autentication == 1){


                ?>
                    <li class="btn-dashboard"><a href="pages/client_menu.php">Dashboard</a></li>
                <?php
                    }

                    elseif($autentication == 2){
                ?>
                    <li class="btn-dashboard"><a href="pages/admin_menu.php">Dashboard</a></li>
                <?php
                    }

                ?>

            </ul>
        </div>
    </div>

    <!-- CARRUSEL GLIDE -->
    <div class="contenedor_carousel">
        <!-- Inicio carousel imagenes -->
        <div class="glide">

            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img src="images/img_slide1.jpg" alt="Error al cargar la imagen"></li>
                    <li class="glide__slide"><img src="images/img_slide2.jpg" alt="Error al cargar la imagen"></li>
                    <li class="glide__slide"><img src="images/img_slide3.jpg" alt="Error al cargar la imagen"></li>
                    <li class="glide__slide"><img src="images/img_slide4.jpg" alt="Error al cargar la imagen"></li>
                    <li class="glide__slide"><img src="images/img_slide5.jpg" alt="Error al cargar la imagen"></li>
                    <li class="glide__slide"><img src="images/img_slide6.jpg" alt="Error al cargar la imagen"></li>
                    <li class="glide__slide"><img src="images/img_slide7.jpg" alt="Error al cargar la imagen"></li>
                    <li class="glide__slide"><img src="images/img_slide8.jpg" alt="Error al cargar la imagen"></li>
                </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="carousel_anterior" data-glide-dir="<"><i class="fas fa-chevron-circle-left fa-3x"></i></button>
                <button class="carousel_siguiente" data-glide-dir=">"><i class="fas fa-chevron-circle-right fa-3x"></i></button>
            </div>
        </div>
    </div>


    <!-- CDN GLIDE JS -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <!-- INICIACION GLIDE -->
    <script>
        new Glide('.glide',{
            type: 'carousel',
            perView: 4,
            focusAt: 'center',
            gap:40,
            breakpoint:{
                1200:{
                    perView:3
                },
                800:{
                    perView:2
                }
            }
        }).mount()
    </script>

<!-- Insercion de particulas -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>