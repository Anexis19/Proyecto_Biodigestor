<?php

    include "../conexion.php";

    // Inicio o reanudacion de una sesion
    session_start();
    $autentication = $_SESSION['TIPO_USUARIO'];

    $nombre_admin   = $_SESSION['NOM_USUARIO'];
    $id_admin       = $_SESSION['ID_USUARIO'];



    if($autentication = '' || $autentication == null || $autentication == 1 ){
        header('Location: inicio_sesion.php?message=3');

    }



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
    <link rel="stylesheet" href="../css/style_collapsed_menu.css">
    <title>Admin</title>
</head>
<body>

<div id="particles-js"></div>
<!-- CABECERA DE TRABAJO -->
<header>

    <div class="contenedor_principal">
        <div class="contenedor_logo">
            <a href="../index.php"><img id="imagen_logo" src="../images/logo.png" alt="Error al cargar la imagen"></a>
        </div>
        <div class="contenedor_nombre_adm">
            <span> BIENVENIDO </span>
            <span>
                <?php
                    echo $nombre_admin;
                ?>

            </span>
        </div>
        <div class="contenedor_admin">
            Nombre de usuario:
            <span class="info_admin">
                <?php
                    echo " $nombre_admin";
                ?>
            </span><br>
            <span>
                ID usuario:
            </span>
            <span class="info_admin">
                <?php
                    echo " $id_admin";
                ?>
            </span>


           <div class="contenedor_cerrar_sesion" >
                <a href="../logic/cerrar_sesion.php"><button class="btn-cierre-sesion">Cerrar Sesion</button></a>
           </div>
    </div>
</header>

<!-- INICIO DE SLIDE MENU -->
<div id="slide-menu" class="menu-collapsed">

        <!-- HEADER -->
        <div id="header">

            <div id="menu-btn">
                <div class="btn-logo"></div>
                <div class="btn-logo"></div>
                <div class="btn-logo"></div>
            </div>
            <div id="title"><span>PERFIL</span></div>

        </div>

        <!-- PROFILE -->
        <div id="profile">
            <div id="photo"><img src="../images/profile2.png" alt=""></div>
            <div id="name"><span>Nombre: <?php echo $nombre_admin ?></span></div>
            <div id="name"><span>Id: <?php echo $id_admin ?></span></div>
        </div>

        <!-- ITEMS -->
        <div id="menu-items">

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="../images/home.png" alt=""></div>
                    <div class="title"><span>Menu Principal</span></div>

                </a>
            </div>

                <!-- SEPARADOR -->
                <div class="item separator">
                </div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="../images/stadistics.png" alt=""></div>
                    <div class="title"><span>Estadisticas</span></div>

                </a>
            </div>

                <!-- SEPARADOR -->
                <div class="item separator">
                </div>


        </div>

        <!-- FOOTER -->
        <div id="footer">

            <div class="contenedor_footer">
                <a href="#">
                    <div class="icon"><img src="../images/pages_up.png" alt=""></div>
                    <!-- <div class="title"><span>Cloud Services</span></div> -->

                    <div class="title" id="home_title">Cloud Services</div>
                </a>


            </div>

        </div>

    </div>


    <!-- BARRA DE NAVEGACION -->
<div class="contenedor_menu">

    <div class="contenedor_listas">
        <ul>
            <a href="../index.php"><li class="btn-inicio-go_home">Menu Principal</li></a>
            <a href="suscription.php"><li>Suscripciones<i class="fa fa-angle-down"></i></a>
                <ul>
                    <li>Premiun</li>
                    <li>Basico</li>
                </ul>
            </li>
            <a href=""><li class="btn-inicio-go_catalogo">¿Quienes somos?</li></a>

        </ul>
    </div>
</div>


<!-- CONTENEDOR CON TABLA DE USUARIOS -->
<div class="contenedor_tabla">
<table class="users_table">
    <tr>
        <th>NUMERO DE REGISTRO</th>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>FECHA</th>
        <th>TIPO ID</th>
        <th>DIRECCION</th>
        <th>DEPARTAMENTO</th>
        <th>MUNICIPIO</th>
        <th>CELULAR</th>
        <th>TIPO DE USUARIO</th>
        <th>MODIFICAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php
        $sqli = "SELECT * FROM users";
        $result = mysqli_query($conectar, $sqli);
        while($mostrar = mysqli_fetch_array($result)){
    ?>
    <tr>



        <td><?php echo $mostrar['NUM_REGISTRO']?></td>
        <td><?php echo $mostrar['ID']?></td>
        <td><?php echo $mostrar['NAME_LASTNAME']?></td>
        <td><?php echo $mostrar['DATE']?></td>
        <td><?php echo $mostrar['TYPE_ID']?></td>
        <td><?php echo $mostrar['ADDRESS']?></td>
        <td><?php echo $mostrar['DEPARTAMENTO']?></td>
        <td><?php echo $mostrar['MUNICIPIO']?></td>
        <td><?php echo $mostrar['CELLPHONE']?></td>
        <td><?php echo $mostrar['TIPO_USUARIO']?></td>
        <td><button type="button" class="btn-editar"></button></td>
        <td><button type="button" class="btn-delete"></button></td>


    </tr>
    <?php
        }
    ?>
    </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="../js/app.js"></script>


<!-- SCRIPT MENU LATERAL-->
<script>
    const btn = document.querySelector('#menu-btn');
    const menu = document.querySelector('#slide-menu');

    btn.addEventListener('click', e => {
       menu.classList.toggle("menu-expanded");
       menu.classList.toggle("menu-collapsed");

    });

</script>
</body>
</html>