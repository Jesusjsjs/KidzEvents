<?php
    // Establecer las cabeceras para indicar que se enviará JSON
    header('Content-Type: application/json');
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tarea";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $query = "SELECT * FROM nombre_tabla";
    $result = mysqli_query($conn, $query);
    
    // Verifica si hay resultados
    if (mysqli_num_rows($result) > 0) {
        // Crea un arreglo para almacenar los resultados
        $rows = array();
    
        // Recorre los resultados y agrega cada fila al arreglo
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
        // Convierte el arreglo en JSON
        $json = json_encode($rows);
    
        // Establece las cabeceras para indicar que se enviará JSON
        header('Content-Type: application/json');
    
        // Imprime el JSON
        echo $json;
    } else {
        echo "No se encontraron resultados.";
    }
?>