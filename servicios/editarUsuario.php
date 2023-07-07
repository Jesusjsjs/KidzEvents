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

    $nombre =  $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $id_borrar = $_POST['id_borrar'];

    echo( "<br/>" );
    echo( $nombre );
    echo( "<br/>" );
    echo( $apellido );
    echo( "<br/>" );
    echo( $id_borrar );


    $sql = "UPDATE nombre_tabla SET nombre = '$nombre', apellido = '$apellido' WHERE id = '$id_borrar'";

    if (mysqli_query($conn, $sql)) {
        echo "La actualización fue exitosa";
        header("Location: index.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }
    


?>

