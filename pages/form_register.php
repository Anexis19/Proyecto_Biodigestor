<?php

    // include "../conexion.php";
    // $mysqli = new mysqli($host, $user, $pw, $db);
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_form.css">
    <title>Formulario de registro</title>
    <link rel="icon" href="../images/icon.png">

    <!-- CONEXION CON AJAX -->
    <script type="text/javascript">

        function mostrarSelect(str){
            var conexion;

            if(str==""){

                document.getElementById("txtHint").innerHTML="";
                return;
            }

            if(window.XMLHttpRequest){
                conexion = new XMLHttpRequest();

            }
            
            conexion.onreadystatechange = function(){
                if(conexion.readyState == 4 && conexion.status == 200){
                    document.getElementById("div").innerHTML = conexion.responseText;
                }
            }

            conexion.open("GET", "../logic/municipiosLogic.php?c="+str,true);
            conexion.send();
        }

    </script>

</head>
<body>
    <!-- CABECERA DE TRABAJO -->
    <header>

        <div class="contenedor_principal">
            <div class="contenedor_logo">
                <img id="imagen_logo" src="../images/logo.jpg" alt="Error al cargar la imagen">
            </div>
            <div class="contenedor_frase">
                <span>Controla y monitoriza tu biodigestor al alcance de unos pocos clicks </span>
            </div>
        </div>

    </header>
    <!-- INICIO DEL FORMULARIO -->

    <div class="contenedor_form">
        <div class="contenedor_img">
            <img src="../images/icon.png" class="avatar" alt="Error al cargar la imagen">
        </div>
        <h2>FORMULARIO DE REGISTRO</h2>
        <form action="../logic/form_registerLogic.php" method="POST" class="form">

            <!-- INPUT DE NOMBRE Y APELLIDOS -->
            <div class="form_container">
                <div class="form_group">
                    <label for="nombre_usuario">Nombres y apellidos </label>
                    <input type="text" name="nombre_usuario" class="input_decor" min="4" max="40" placeholder="nombres y apellidos" required>
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- INPUT DE FECHA DE NACIMIENTO -->
            <div class="form_container">
                <div class="form_group">
                    <label for="fecha_nac">Fecha de nacimiento </label>
                    <input type="date" name="fecha_nac" class="input_decor" min="1950-01-01" max="2004-12-31"  required>
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- INPUT DE TIPO DE DOCUMENTO -->
            <div class="form_container">
                <div class="form_group">
                    <label for="tipo_doc"> Tipo de documento </label>
                    <select class="input_decor" name="tipo_doc">
                        <option value="">Seleccione</option>
                        <option value="CC">Cedula de ciudadania</option>
                        <option value="PST">Pasaporte</option>
                    </select>
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- INPUT DEL NUMERO DE IDENTIFICACION -->
            <div class="form_container">
                <div class="form_group">
                    <label for="numero_id"> Numero de identificacion </label>
                    <input type="text" name="numero_id" class="input_decor" placeholder="Número de identificación" pattern="[0-9]{8,10}" title="La identifiacion solo debe contener caracteres numéricos">
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- INPUT DE LA DIRECCION  -->
            <div class="form_container">
                <div class="form_group">
                    <label for="direccion"> Dirección </label>
                    <input type="text" name="direccion" class="input_decor" placeholder="Número de dirección">
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- SELECT DE DEPARTAMENTO -->
            <div class="form_container">
                <div class="form_group">
                    <label for="depart"> Departamento </label>
                    <select class="input_decor" name="depart" onclick="mostrarSelect(this.value)">
                        <!-- <option >Departamento</option> -->

                        <?php 
                            include "../logic/departamentosLogic.php";
                        ?>

                    </select>
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- SELECT DE MUNICIPIO -->
            <div class="form_container">
                <div class="form_group" id="div">
                    <label for="munic"> Municipio </label>
                    <select class="input_decor" name="munic">
                        <option>Municipio</option>
                    </select>
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- INPUT NUMERO DE CELULAR -->
            <div class="form_container">
                <div class="form_group">
                    <label for="tel"> Telefono / Celular </label>
                    <input type="tel" name="tel" class="input_decor" placeholder="Número de telefono">
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- INPUT DE LA CONTRASEÑA -->
            <div class="form_container">
                <div class="form_group">
                    <label for="pasw"> Contraseña </label>
                    <input type="password" name="pasw" class="input_decor" placeholder="Digite una contraseña">
                    <span class="form_line"></span>
                </div>
            </div>
            <!-- INPUT DE REP CONTRASEÑA -->
            <div class="form_container">
                <div class="form_group">
                    <label for="re_pasw">Repita la contraseña </label>
                    <input type="password" name="re_pasw" class="input_decor" placeholder="Repita la contraseña">
                    <span class="form_line"></span>
                </div>
            </div>
            <button type="submit" class="btn_registrar">REGISTRAR</button>
        </form>
    </div>
</body>
</html>