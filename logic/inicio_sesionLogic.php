<?php



    $username = $_POST['username'];
    $password = $_POST['password'];


    session_start();

    include '../conexion.php';
    $mysqli = new mysqli($host, $user, $pw, $db);

    $sql = "SELECT * FROM users WHERE ID = '$username'";
    $result1 = $mysqli->query($sql);
    $row1 = $result1->fetch_array(MYSQLI_NUM);
    $numero_filas = $result1->num_rows;

    if($numero_filas > 0){

        $passw_bd = $row1[9];

        if($passw_bd == $password){


            $id_usuario = $row1[1];
            $nom_usuario = $row1[2];
            $tipo_usuario = $row1[10];
            $_SESSION['ID_USUARIO']     = $id_usuario;
            $_SESSION['NOM_USUARIO']    = $nom_usuario;
            $_SESSION['TIPO_USUARIO']   = $tipo_usuario;

            if($tipo_usuario == 2){
                header('Location: ../pages/admin_menu.php');
            }
            elseif($tipo_usuario == 1){
                header('Location: ../pages/client_menu.php');
            }
            else{
                header('Location: ../pages/inicio_sesion.php?message=1');
            }



        }

    }else{
        header('Location: ../pages/inicio_sesion.php?message=2');
    }

    //         $_SESSION["autentication"]= "SIx3";
    //         $tipo_usuario = $row1[10];
    //         $nombre_usuario = $row1[2];
    //         $sql2 = "SELECT * FROM tipo_usuario WHERE ID_USUARIO='$tipo_usuario'";
    //         $result2 = $mysqli->query($sql2);
    //         $row2 = $result2->fetch_array(MYSQLI_NUM);
    //         $descipcion_usuario = $row2[1];
    //         $_SESSION["tipo_usuario"]= $descipcion_usuario;
    //         $_SESSION["nombre_usuario"]= $nombre_usuario;
    //         $_SESSION["id_usuario"]= $row1[1];

    //         if($tipo_usuario == 2){
    //             header('Location: ../pages/admin_menu.php');
    //         }
    //         if($tipo_usuario ==1){
    //             header("Location: ../pages/client_menu.php");
    //         }
    //     }
    //     else{
    //         header('Location: ../pages/inicio_sesion.php?message=1');
    //     }
    // }
    // else{
    //     header('Location: ../pages/inicio_sesion.php?message=2');
    // }
?>