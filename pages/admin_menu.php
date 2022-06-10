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
    <title>Admin</title>
</head>
<body>

<div id="particles-js"></div>
<!-- CABECERA DE TRABAJO -->
<header>

    <div class="contenedor_principal">
        <div class="contenedor_logo">
            <a href="../pages/inicio_sesion.php?message=4"><img id="imagen_logo" src="../images/logo.png" alt="Error al cargar la imagen"></a>
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
                <button class="btn-cierre-sesion"><a href="../logic/cerrar_sesion.php">Cerrar Sesion</a></button>
           </div>
    </div>
</header>
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
</body>
</html>