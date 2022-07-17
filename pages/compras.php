<?php
    include "../conexion.php";

    session_start();
    error_reporting(0);
    $bandera = false;
    $autentication  = $_SESSION['TIPO_USUARIO'];
    $nombre_cliente = strtoupper($_SESSION['NOM_USUARIO']);
    $id_cliente     = strtoupper($_SESSION['ID_USUARIO']);
    $tipo_cliente   = $_SESSION['TIPO_USUARIO'];
    $tipo_plan      = $_SESSION['TIPO_PLAN'];

    if($autentication == 'Admin' || $autentication == 'Cliente'){
        $bandera = true;
    }
    else{
        echo "  <script>
                    alert('Para realizar una compra, debe haber iniciado sesión');
                    location.href = 'inicio_sesion.php?message=5';
                </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet"  href="../css/style.css">
    <link rel="stylesheet" href="../css/style_suscription.css">
    <link rel="stylesheet" href="../css/style_compras.css">
    <link rel="icon" href="../images/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&family=Kanit:ital,wght@0,400;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>
    <title>Compras</title>
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
                if ($bandera == false){
            ?>

                <div class="contenedor_frase">
                    <span>Controla y monitoriza tu biodigestor al alcance de unos pocos clicks </span>
                </div>
                <div class="contenedor_botones">
                    <div class="contenedor_botton_inicio">
                        <a href="pages/inicio_sesion.php"><button type="" class="btn-inicio-sesion">Inicio de Sesion</button></a>
                    </div>
                    <div class="contenedor_botton_registro">
                        <a href="pages/form_register.php"><button type="" class="btn-inicio-sesion">Registrarse</button></a>
                    </div>
                </div>
            <?php
                }
                else{
            ?>
               <div class="contenedor_nombre_clt">
                    <span> REALIZA TU COMPRA </span>
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
                    </span><br>
                    Tipo de usuario:
                    <span>
                        <?php
                            echo $autentication;
                        ?>
                    </span>


                    <div class="contenedor_cerrar_sesion" >
                        <a href="../logic/cerrar_sesion.php"><button class="btn-cierre-sesion">Cerrar Sesion</button></a>
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
                <a href="../index.php"><li class="btn-inicio-go_home">Menu Principal</li></a>
                <a href="suscription.php"><li>Suscripciones <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li>Premiun</li>
                        <li>Basico</li>
                    </ul>
                </li>
                    <a href="quienes_somos.php"><li class="btn-inicio-go_catalogo">¿Quienes somos?</li></a>
                <?php
                    if($autentication == 'Cliente'){


                ?>
                    <a href="client_menu.php"><li class="btn-dashboard">Menu del Usuario</li></a>
                <?php
                    }

                    elseif($autentication == 'Admin'){
                ?>
                    <a href="admin_menu.php"><li class="btn-dashboard">Menu del Usuario</li></a>
                <?php
                    }

                ?>
            </ul>
        </div>
    </div>

    <?php
        if(isset($_GET['suscp'])){
            $suscription = $_GET['suscp'];
            if($suscription == 'Basic'){



    ?>

    <div class="contenedor_planes">
        <!-- CONTENEDOR PLAN BASIC -->
        <div class="contendor_basic">
            <!-- CONTENEDOR IMAGEN -->
            <div class="img_plan">
                <img src="../images/basic.png" alt="Error al cargar la imagen">
            </div>
            <!-- CONTENEDOR TITULO "BASIC" -->
            <div class="contenedor_letras">
                BASIC
            </div>
            <!-- CONTENEDOR PRECIOS BASIC -->
            <div class="contenedor_precio">

                <span>$ 365.000 /</span>Pago Inicial
                <br>
                    Mensualidades de $35.000
            </div>
            <!-- CONTENEDOR CARACTERISTICAS BASIC -->
            <div class="contenedor_caracteristicas">
                <ul>
                    <li>3 meses de uso gratis de la aplicación</li>
                    <li>Mantenimiento periodico</li>
                </ul>
            </div>
        </div>

        <!-- CONTENEDOR COMPRA PLAN BASIC -->
        <div class="contenedor_orden_compra">
            <!-- CONTENEDOR IMAGEN -->
            <div class="contenedor_pcs_compra">
                ORDEN DE COMPRA
            </div>


            <div class="descripcion_compra">

                <div class="titulo_dts_productos">
                    PRODUCTOS:
                </div>
                <div class="titulo_dts_precio">
                    PRECIOS:
                </div>
                <!--  -->
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/gas.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Biodigestor de 30 lts con sensores de temperatura,
                        humedad y volumen de gas.
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 320.000 (Unico pago)
                    </div>
                </div>
                <!--  -->
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/maintenance.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Mantenimiento periodico preventivo realizado por un
                        técnico calificado
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 15.000 (Definido por el técnico)
                    </div>
                </div>
                <!--  -->
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/membership.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Acceso GRATUITO a la plataforma AUTOLIFEGAS por 3 meses
                        para el monitoreo de su autodigestor/es
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 35.000 (Despues de los 3 meses)
                    </div>
                </div>
                <!--  -->
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/installation.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Servicio de instalación por parte de técnicos profesionales
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 30.000
                    </div>
                </div>
                <div class="titulo_dts_productos">
                    TOTAL:
                </div>
                <div class="titulo_dts_precio">
                    $ 365.000
                </div>
            </div>
            <div class="contenedor_realizar_compra">
                <a href="../logic/comprasLogic.php?plan=BASIC"><button class="btn_realizar_compra">COMPRAR</button></a>
            </div>

        </div>
    </div>



    <?php
            }elseif($suscription == 'Prem'){
    ?>


    <!-- CODIGO SI URL = PREMIUM -->
    <div class="contenedor_planes">
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

                    <span>$ 356.000 /</span> Pago Inicial
                    <br>
                        Mensualidades de $20.000
                </div>
                <!-- CONTENEDOR CARACTERISTICAS -->
                <div class="contenedor_caracteristicas">
                    <ul>
                        <li>12 meses de uso gratis de la aplicación</li>
                        <li>30% de descuento en la instalación</li>
                        <li>Mantenimiento periódico</li>

                    </ul>
                </div>

        </div>
            <!-- CONTENEDOR COMPRA PLAN PREMIUM -->
        <div class="contenedor_orden_compra">
            <!-- CONTENEDOR IMAGEN -->
            <div class="contenedor_pcs_compra">
                ORDEN DE COMPRA
            </div>


            <div class="descripcion_compra">

                <div class="titulo_dts_productos">
                    PRODUCTOS:
                </div>
                <div class="titulo_dts_precio">
                    PRECIOS:
                </div>
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/gas.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Biodigestor de 30 lts con sensores de temperatura,
                        humedad y volumen de gas.
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 320.000 (Unico pago)
                    </div>
                </div>
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/maintenance.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Mantenimiento periodico preventivo realizado por un
                        técnico calificado
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 15.000 (Definido por el técnico)
                    </div>
                </div>
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/membership.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Acceso GRATUITO a la plataforma AUTOLIFEGAS por 12 meses
                        para el monitoreo de su autodigestor/es
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 20.000 (Despues de los 12 meses)
                    </div>
                </div>
                <div class="contenedor_dts_compra">
                    <div class="contenedor_dts_compra_img">
                        <img src="../images/installation.png" alt="Error al cargar la imagen">
                    </div>
                    <div class="contenedor_dts_compra_descp">
                        Servicio de instalación por parte de técnicos profesionales
                    </div>
                    <div class="contenedor_dts_precio">
                        $ 21.000 (30% de descuento)
                    </div>
                </div>
                <div class="titulo_dts_productos">
                    TOTAL:
                </div>
                <div class="titulo_dts_precio">
                    $ 356.000
                </div>
            </div>
            <div class="contenedor_realizar_compra">
                <a href="../logic/comprasLogic.php?plan=PREMIUM"><button class="btn_realizar_compra">COMPRAR</button></a>
            </div>

        </div>
    </div>


    <?php
            }
        }
    ?>
     <!-- Insercion de particulas -->
     <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>