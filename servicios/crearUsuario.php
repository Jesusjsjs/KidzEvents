<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "tarea";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    else{
        echo( "Conection succesful" );
    }

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO nombre_tabla (nombre, apellido, pass) VALUES ('$nombre', '$apellido', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserción exitosa";
        header("Location: index.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }
    
?>

