<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kidzevents";
$port = 3306;

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
    
// Establecer el conjunto de caracteres a UTF-8
mysqli_set_charset($conn, "utf8");

// Ejecutar la consulta SELECT
$query = "SELECT * FROM eventosprueba";
$result = $conn->query($query);

// Verificar si la consulta tuvo resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados obtenidos

    $rows = array();

    while ($row = mysqli_fetch_assoc($result)) {
        // Acceder a los valores de cada fila
        $rows[] = $row;
        // Hacer algo con los valores...
    }

    $json = json_encode($rows);
    

    // Establece las cabeceras para indicar que se enviará JSON
    header('Content-Type: application/json');

    echo $json;


} else {
    echo "No se encontraron resultados.";
}

?>