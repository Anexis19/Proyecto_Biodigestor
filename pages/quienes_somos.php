<?php
    include "../conexion.php";

    session_start();
    error_reporting(0);
    $bandera = false;
    $autentication  = $_SESSION['TIPO_USUARIO'];
    $nombre_cliente = strtoupper($_SESSION['NOM_USUARIO']);
    $id_cliente     = strtoupper($_SESSION['ID_USUARIO']);

    if($autentication == 'Cliente' || $autentication == 'Admin'){
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
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_quienes_somos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400;1,500;1,900&family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>
    <!-- Estilos del carousel -->
    <title>Quienes Somos</title>
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
                        <a href="inicio_sesion.php"><button type="" class="btn-inicio-sesion">Inicio de Sesion</button></a>
                    </div>
                    <div class="contenedor_botton_registro">
                        <a href="form_register.php"><button type="" class="btn-inicio-sesion">Registrarse</button></a>
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
                <a href="suscription.php"><li>Suscripciones</a><i class="fa fa-angle-down"></i>
                    <ul>
                        <li>Premiun</li>
                        <li>Basico</li>
                    </ul>
                </li>
                <a href=""><li class="btn-inicio-go_catalogo">¿Quienes somos?</li></a>

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
    <div class="contenedor_integrantes">
        <div class="integrantes_group">
            <div class="contenedor_foto">
                    <img src="../images/elkin.png" alt="Error al cargar la imagen">
            </div>
            <div class="contenedor_descripcion">
                    Descripcion del miembro del equipo
            </div>
        </div>
        <div class="integrantes_group2">
            <div class="contenedor_foto2">
                    <img src="../images/andres.png" alt="Error al cargar la imagen">
            </div>
            <div class="contenedor_descripcion2">
                    Descripcion del miembro del equipo
            </div>
        </div>
        <div class="integrantes_group">
            <div class="contenedor_foto">
                    <img src="../images/diago.png" alt="Error al cargar la imagen">
            </div>
            <div class="contenedor_descripcion">
                    Descripcion del miembro del equipo
            </div>
        </div>
        <div class="integrantes_group2">
            <div class="contenedor_foto2">
                    <img src="../images/hurtado.png" alt="Error al cargar la imagen">
            </div>
            <div class="contenedor_descripcion2">
                    Descripcion del miembro del equipo
            </div>
        </div>
        <div class="integrantes_group">
            <div class="contenedor_foto">
                    <img src="../images/edier.png" alt="Error al cargar la imagen">
            </div>
            <div class="contenedor_descripcion">
                    Descripcion del miembro del equipo
            </div>
        </div>
        <div class="integrantes_group2">
            <div class="contenedor_foto2">
                    <img src="../images/richard.png" alt="Error al cargar la imagen">
            </div>
            <div class="contenedor_descripcion2">
                    Descripcion del miembro del equipo
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>