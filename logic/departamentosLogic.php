<?php
    $host = "localhost";
    $user = "root";
    $pw   = "";
    $db   = "db_biodigester";

    $conectar = mysqli_connect($host, $user, $pw, $db);

    if(!$conectar){
        echo "Error en la conexion con el servidor";
    }

    $consulta = "SELECT * FROM departamentos";
    $ejecutarConsulta = mysqli_query($conectar, $consulta);

    #Selecciona los datos de la tabla departamentos
    while($fila = mysqli_fetch_array($ejecutarConsulta)){
        echo "<option value='".$fila['ID_Depart']."' >".$fila['Departamento']."</option>";
    }

?>