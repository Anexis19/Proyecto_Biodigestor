<?php

    // ========================
    //SECCION DE SEGURIDAD
    //=========================
    include "../conexion.php";

    session_start();
    $bandera = false;
    $bandera2 = false;

    $autentication      = $_SESSION['TIPO_USUARIO'];
    $tipo_cliente       = $_SESSION['TIPO_USUARIO'];
    $numero_id          = $_SESSION['ID_USUARIO'];
    $verificacion_plan  = $_SESSION['TIPO_PLAN'];

    // VERIFICACION DE INICIO DE SESION
    if ($autentication == 'Cliente'){
        $bandera = true;

        // VERIFICACION DE EXISTENCIA O NO DE UN PLAN
        if($verificacion_plan != ''){
            echo "<script>
                alert('ERROR, ya se ha adquirido previamente un plan. Para cancelar la suscripción, visite su DASHBOARD');
                location.href = '../index.php';
            </script>";

        // SI EN LA BASE DE DATOS NO SE ENCUENTRA REGISTRADO UN PLAN, REALIZA EL REGISTRO
        }else{

            $tipo_plan = $_GET['plan'];
            $registro_compra = "UPDATE users SET TIPO_PLAN = '$tipo_plan' WHERE ID = $numero_id";
            $prueba = mysqli_query($conectar, $registro_compra);
            if($prueba){

                $_SESSION['TIPO_PLAN'] = $tipo_plan;
                echo "<script>
                    alert('Compra realizada EXITOSAMENTE');
                    location.href='../index.php';
                </script>";
            }
            else{
                echo "<script>
                    alert('ERROR. No se ha podido completar la compra');
                    location.href = '../index.php';
                </script>";
            }

        }

    }
    else{
        header('Location: ../pages/inicio_sesion.php?message=3');
    }


?>