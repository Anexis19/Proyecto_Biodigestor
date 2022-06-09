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

    // Verificacion de ID NO repetido
    $consulta_id = "SELECT * FROM users WHERE ID='$numero_id'";
    $verificar_id = mysqli_query($conectar, $consulta_id);
    if(mysqli_num_rows($verificar_id)>0){

        echo "<script>
            alert('Registro Incorrecto. El ID ya se encuentra registrado');
            location.href = '../pages/form_register.php';
        </script>";

        // Cierre de conexion
        exit();
    }

    // Verificacion de telefono
    $consulta_tel = "SELECT * FROM users WHERE CELLPHONE='$tel'";
    $verificar_tel = mysqli_query($conectar, $consulta_tel);
    if(mysqli_num_rows($verificar_tel)>0){

        echo "<script>
            alert('Registro Incorrecto. El numero de telefono ya se encuentra registrado');
            location.href = '../pages/form_register.php';
        </script>";

        // Cierre de conexion
        exit();
    }


    // Registro Exitoso / Incorrecto
    $registrar = "INSERT INTO users (ID, NAME_LASTNAME, DATE, TYPE_ID, ADDRESS, DEPARTAMENTO, MUNICIPIO, CELLPHONE, PASSWORD, TIPO_USUARIO  ) VALUES ('$numero_id','$nombre_usuario', '$fecha_nac', '$tipo_doc', '$direccion', '$depart', '$munic', '$tel', '$pasw', '1')";
    $prueba = mysqli_query($conectar, $registrar);
    if($prueba){
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