<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="login-container">
        <h1>Crear evento</h1>
        <!-- Formulario de inicio de sesion -->
        <form id="formMaster" action="crearUsuario.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre del evento:</label>
                <input autocomplete="off" type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Descripción del evento</label>
                <input autocomplete="off" type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="pass">Date del evento:</label>
                <input autocomplete="off" type="text" id="pass" name="pass" required>
            </div>

            <button id="iniciarSesion"  type="submit">Agregar usuario</button>
        </form>
    </div>

    <div class="padreUsers">
    <?php
        // Obtener el JSON desde una fuente externa o un archivo local
        $json = file_get_contents('http://localhost/desarrollo/KidzEvents/pedirUsers.php');

        // Decodificar el JSON en un objeto o arreglo en PHP
        $data = json_decode($json);



        // Acceder a los datos del JSON y mostrarlos
        foreach ($data as $item) {
            echo "<div class='cardUser' id='cardUser" . $item->id. "' >";
                echo "<h3>" . "Nombre del evento: " . $item->nombre . "</h3>";
                echo "<h3>" . "Descripción: " . $item->apellido . "</h3>";
                
                echo "<form  method='POST'>". "<input class='inputInv' name='id_editar' value='$item->id'>" ."<button id=edit" . $item->id. "> Editar evento" . "</button>"."</form>";

                echo "<form action='borrarUsuario.php' method='POST'>". "<input class='inputInv' name='id_borrar' value='$item->id'>" ."<button  id=" . $nombre. "> Borrar evento" . "</button>"."</form>";
            echo "</div>";
        }
    ?>
    </div>

    <script src="./js/events.js" ></script>
</body>
</html> 