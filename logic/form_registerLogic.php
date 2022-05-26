<?php

    // Registro de usuario en la base de datos. Especificamente en la tabla users
    require '../conexion.php';
    
    // Se reciben los datos del formulario
   $nombre_usuario  =   $_POST['nombre_usuario'];
   $fecha_nac       =   $_POST['fecha_nac'];
   $tipo_doc        =   $_POST['tipo_doc'];
   $numero_id       =   $_POST['numero_id'];
   $direccion       =   $_POST['direccion'];
   $depart          =   $_POST['depart'];
   $munic           =   $_POST['munic'];
   $tel             =   $_POST['tel'];
   $pasw            =   $_POST['pasw'];

   $registrar = "INSERT INTO users VALUES ('$numero_id','$nombre_usuario', '$fecha_nac', '$tipo_doc', '$direccion', '$depart', '$munic', '$tel', '$pasw')";
   $query = mysqli_query($conectar, $registrar);

   if($query){
       echo "<script> alert('Registro existoso'); 
       location.href = '../index.html';
       </script>";
   }
   else{
       echo "<script> alert('Registro incorrecto'); 
       location.href = '../index.html';
       </script>";
   }
?>