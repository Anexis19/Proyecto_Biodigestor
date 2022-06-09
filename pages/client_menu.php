<?php

    include "../conexion.php";

    // Validacion de inicio de session
    session_start();
    $autentication = $_SESSION['TIPO_USUARIO'];

    if($autentication = '' || $autentication == null || $autentication == 2 ){
        header('Location: inicio_sesion.php?message=3');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="../css/style_construction.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400;1,500;1,900&family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b50f20f4b1.js" crossorigin="anonymous"></script>
    <title>Client</title>

</head>
<body>
    <h1><?php echo $_SESSION['TIPO_USUARIO']?></h1>
    <h1><?php echo $_SESSION['NOM_USUARIO']?></h1>
    <div class="titulo">
        <div class="text">
        En desarrollo. Nuestros programadores (1) están tomando café. Pronto volveremos al código
        </div>
   </div>

</body>
</html>