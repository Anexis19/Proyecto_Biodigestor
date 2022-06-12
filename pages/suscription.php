<?php
    include "../conexion.php";

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
    <link rel="stylesheet"  href="../css/style.css">
    <link rel="stylesheet" href="../css/style_suscription.css">
    <link rel="icon" href="../images/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&family=Kanit:ital,wght@0,400;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>

    <title>Suscription</title>
</head>
<body>
    <div id="particles-js"></div>

    <!-- CABECERA DE TRABAJO -->
    <header>
        <div class="contenedor_principal">
            <div class="contenedor_logo">
                <a href="../index.php"><img id="imagen_logo" src="../images/logo.png" alt="Error al cargar la imagen"></a>
            </div>

            <?php

                // LA BANDERA VERIFICA SI SE TIENE UNA SESION ACTIVA
                if ($bandera == false){

                    // CABECERA SIN LA INFORMACION DEL CLIENTE
            ?>

                <div class="contenedor_frase">
                    <span>Controla y monitoriza tu biodigestor al alcance de unos pocos clicks </span>
                </div>


                <div class="contenedor_botones">
                    <div class="contenedor_botton_inicio">
                        <button type="" class="btn-inicio-sesion"> <a href="inicio_sesion.php">Inicio de Sesion</a></button>
                    </div>
                    <div class="contenedor_botton_registro">
                        <button type="" class="btn-inicio-sesion"> <a href="form_register.php">Registrarse</a> </button>
                    </div>
                </div>

            <?php
                }
                else{

                    // CABECERA CON LA INFORMACION DEL CLIENTE
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
                            <button class="btn-cierre-sesion"><a href="../logic/cerrar_sesion.php">Cerrar Sesion</a></button>
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
                <li class="btn-inicio-go_home"><a href="../index.php">Menu Principal</a></li>
                <li>Suscripciones <i class="fa fa-angle-down"></i>
                    <ul>
                        <li>Premiun</li>
                        <li>Basico</li>
                    </ul>
                </li>
                <li class="btn-inicio-go_catalogo"><a href="">¿Quienes somos?</a></li>

            </ul>
        </div>
    </div>

    <!-- TIPOS DE PLANES -->
    <div class="contenedor_planes">
        <div class="contendor_basic">
            <!-- CONTENEDOR IMAGEN -->
            <div class="img_plan">
                <img src="../images/basic.png" alt="Error al cargar la imagen">
            </div>
            <!-- CONTENEDOR TITULO "BASIC" -->
            <div class="contenedor_letras">
                BASIC
            </div>
            <!-- CONTENEDOR PRECIOS -->
            <div class="contenedor_precio">

                <span>$ 1.99 /</span> mes
                <br>
                    más coste de instalación
            </div>
            <!-- CONTENEDOR CARACTERISTICAS -->
            <div class="contenedor_caracteristicas">
                <ul>
                    <li>3 meses de uso gratis de la aplicación</li>
                    <li>Mantenimiento periodico</li>
                </ul>
            </div>
            <!-- CONTENEDOR BOTON COMPRAR -->
            <div class="contenedor_compras">
                <button><a href="">COMPRAR</a></button>
            </div>
        </div>
        <div class="contenedor_premium">
             <!-- CONTENEDOR IMAGEN -->
            <div class="img_plan">
                <img src="../images/premium.png" alt="" >
            </div>
            <!-- CONTENEDOR TITULO "PREMIUM" -->
            <div class="contenedor_letras">
                PREMIUM
            </div>
            <!-- CONTENEDOR PRECIOS -->
            <div class="contenedor_precio">

                <span>$ 2.99 /</span> mes
                <br>
                    más coste de instalación
            </div>
            <!-- CONTENEDOR CARACTERISTICAS -->
            <div class="contenedor_caracteristicas">
                <ul>
                    <li>12 meses de uso gratis de la aplicación</li>
                    <li>30% de descuento en la instalación</li>
                    <li>Mantenimiento periódico</li>

                </ul>
            </div>
            <!-- CONTENEDOR BOTON COMPRAR -->
            <div class="contenedor_compras">
                <button><a href="">COMPRAR</a></button>
            </div>
        </div>

    </div>
    <!-- Insercion de particulas -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>