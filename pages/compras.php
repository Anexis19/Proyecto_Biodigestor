<?php
    include "../conexion.php";

    session_start();
    error_reporting(0);
    $bandera = false;
    $autentication  = $_SESSION['TIPO_USUARIO'];
    $nombre_cliente = strtoupper($_SESSION['NOM_USUARIO']);
    $id_cliente     = strtoupper($_SESSION['ID_USUARIO']);

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
    <link rel="icon" href="../images/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&family=Kanit:ital,wght@0,400;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>
    <title>Compras</title>
</head>
<body>
    <div id="particles-js"></div>

    <h1>HA INICIADO CON UNA CUENTA VALIDA</h1>

</body>
</html>