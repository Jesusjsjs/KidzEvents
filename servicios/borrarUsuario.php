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

    $id_borrar = $_POST['id_borrar'];

    echo( $nombre_borrar );

    $sql = "DELETE FROM nombre_tabla WHERE id = '$id_borrar'";

    if (mysqli_query($conn, $sql)) {
        echo "La eliminación fue exitosa";
        header("Location: index.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }
    


?>

