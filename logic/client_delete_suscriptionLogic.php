<?php
    include '../conexion.php';
    session_start();
    $id_eliminar        = $_GET['ID'];
    $tipo_plan          = $_GET['PLAN'];
    $id_plan            = '';


    $actualizar_plan    = "UPDATE users SET TIPO_PLAN = '' WHERE ID = $id_eliminar";
    $prueba             = mysqli_query($conectar,$actualizar_plan);
    if($prueba){

        $_SESSION['TIPO_PLAN'] = '';
        echo "<script>
            alert('Suscripcion eliminada CORRECTAMENTE');
            location.href='../pages/client_suscription.php';
        </script>";
    }
    else{
        echo"<script>
            alert('NO se ha podido eliminar la suscripcion');
            location.href='../pages/client_suscription.php';
        </script>";
    }


?>