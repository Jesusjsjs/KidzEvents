<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/crearEvento.css" />
    <link rel="stylesheet" href="./src/styles/header.css"/>
    <link rel="stylesheet" href="./src/styles/footer.css"/>

    <title>Crear eventos</title>
</head>

<body>

    <header>
        <div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="dashboardUser.php">Crear</a></li>
                    <li>Favoritos</li>
                </ul>
            </nav>

            <div class="userPass">
                <ul>
                    <!-- <li class="signIn">Sign In</li>
                    <li class="logIn">Log In</li> -->
                    <?php
                        echo $user->getcorreo();
                    ?>
                    <a href="model/logout.php">Cerrar sesion </a>
                </ul>
            </div>
        </div>
    </header>

    <div class="llenarEventos">

        <form action="./guardarEvento.php" method="POST" enctype="multipart/form-data">
            <label>Nombre del evento</label>
            <input name="nombreEvento" type="text" id="nombreEvento">

            <label>Fecha</label>
            <input name="horaEvento" type="date">

            <label>Descripción del evento</label>
            <input name="descriptionEvento" type="text">

            <label>Opcionalmente puedes pegar un mapa</label>
            <input name="ubiEvento" type="text">

            <label>Dirección del evento</label>
            <input name="directionEvento" type="text">

            <h2>Imagenes del evento</h2>

            <label>Imagen 1</label>
            <input name="imagenMain" type="file" id="imagenMain">

            <label>Imagen 2</label>
            <input name="imagen2" type="file">

            <label>Imagen 3</label>
            <input name="imagen3" type="file">

            <label>Imagen 4</label>
            <input name="imagen4" type="file">

            <input name="userId" value=<?php echo $userId ?>>

            <button type="submit">SUBIR EVENTO</button>

        </form>
    </div>

    <h2 class="textCards">TUS EVENTOS</h2>
    <div class="containerCards">
        <?php foreach ($user->getEventsOfUser($userId) as $r): ?>
            <div class="cardEvento">
                <?php
                $nombreMainImg = $r->imagenMain;
                $pathImagen = './src/imgEventos/' . $nombreMainImg;
                ?>
                <img src=<?php echo $pathImagen ?>>
                <div class="cardEventoInfo">
                    <h3>
                        <?php echo $r->nombreEvento ?>
                    </h3>
                    <h4>
                        <?php echo $r->descriptionEvento ?>
                    </h4>
                    <h5>
                        <?php echo $r->horaEvento ?>
                    </h5>
                    <span>
                        <?php 
                            if( $j->estatus ){
                                echo "Evento aprobado";
                            } else{
                                echo "Evento no aprobado";
                            }
                        ?>
                    </span>

                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <?php
        $esAdmin = $user->esAdmin($userId); 
        if ($esAdmin) { 
    ?>

        <h2 class="textCards">EVENTOS POR APROBAR</h2>
        <div class="containerCards">
            
            <?php foreach ($eventos->pedirEventosToDB() as $j): ?>
                <div class="cardEvento">
                <?php
                $nombreMainImg = $j->imagenMain;
                $pathImagen = './src/imgEventos/' . $nombreMainImg;
            ?>
                <img src=<?php echo $pathImagen ?>>
                <div class="cardEventoInfo">
                    <h3>
                        <?php echo $j->nombreEvento ?>
                    </h3>
                    <h4>
                        <?php echo $j->descriptionEvento ?>
                    </h4>
                    <h5>
                        <?php echo $j->horaEvento ?>
                    </h5>
                    <h3>Todos los eventos por aprobar</h3>

                    <span>
                        <?php 
                            if( $j->estatus ){
                                echo "Evento aprobado";
                            } else{
                                echo "Evento no aprobado";
                            }
                        ?>
                    </span>
                    
                    <form action="" method="POST">
                        <input name="eventoAprobar" style="display:none" value=<?php echo $j->idEvento ?> >
                        <button type="submit">Aprobar evento</button>
                    </form>
                    

                </div>
            </div>
            <?php endforeach; ?>

        <?php } ?>
    </div>

    <footer>
        <div class="footerChild">
            <img src="./src/img/logoColors.png" />
            <div>
                <h3>About us</h3> 
                <h3>FQA</h3> 
                <h3>Support</h3> 
            </div>
            <div>
                <h3>Crear</h3> 
                <h3>Favorito</h3> 
                <h3>Inicio</h3> 
            </div>
            <div>
                <h3>Facebook</h3> 
                <h3>Instagram</h3> 
                <h3>Whatsap</h3> 
            </div>
        </div>
    </footer>

</body>

</html>