<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/crearEvento.css" />
    <title>Crear eventos</title>
</head>

<body>


    <header>
        <a href="index.php">Inicio</a>
    </header>

    <?php if(  $user->esAdmin( $userId )  ) { ?>
        <!-- Usuario normal -->
        <div class="barraOptions">
            <img src="./src/img/logoColors.png" />
            <ul>
                <li id="aprobarEventoAbrir">Aprobar evento</li>
                <li id="historialEventoAbrir">Historial eventos</li>
            </ul>
        </div>
    <?php } else { ?>
        <!-- Usuario normal -->
        <div class="barraOptions">
            <img src="./src/img/logoColors.png" />
            <ul>
                <li id="crearEventoAbrir">Crear evento</li>
                <li id="aprobadosEventoAbrir">Eventos aprobados</li>
                <li id="aprobarEventoAbrir">Eventos por aprobar</li>
            </ul>
        </div>
    <?php } ?>


    <div class="vistasDashBoard">
        <?php if( $user->esAdmin( $userId ) ) {  ?>
            <!-- Si es admin -->
            <h2 class="textCards">EVENTOS POR APROBAR</h2>
            <div id="eventosVentana" class="containerCards">
                
                <?php foreach ($eventos->pedirEventosToDB() as $j): ?>
                    <div class="cardEvento">
                    <?php
                    
                    $pathImagen1 = './src/imgEventos/' . $j->imagenMain;
                    $nombreImagen2 = './src/imgEventos/' . $j->imagen2;
                    $nombreImagen3 = './src/imgEventos/' . $j->imagen3;
                    $nombreImagen4 = './src/imgEventos/' . $j->imagen4;


                    // $pathImagen2 = './src/imgEventos/' . $nombreMainImg;
                    // $pathImagen3 = './src/imgEventos/' . $nombreMainImg;
                    // $pathImagen4 = './src/imgEventos/' . $nombreMainImg;
                ?>
                    <img src=<?php echo $pathImagen1 ?>>
                    <img src=<?php echo $nombreImagen2 ?>>
                    <img src=<?php echo $nombreImagen3 ?>>
                    <img src=<?php echo $nombreImagen4 ?>>

                    <div class="cardEventoInfo">
                        <h3>
                            <?php $j->nombreEvento ?>
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
                    </div>
                    
                    <form action="" method="POST">
                        <input name="eventoAprobar" style="display:none" value=<?php echo $j->idEvento ?> >
                        <button type="submit">Aprobar evento</button>
                    </form>
                        
                </div>
                <?php endforeach; ?>
            </div>

        <?php } else {  ?>
            <!-- Usuario normal -->
            <div id="crearEventoVentana" class="llenarEventos">
                <h2>CREAR UN EVENTO</h2>
                <form action="./guardarEvento.php" method="POST" enctype="multipart/form-data">
                    <h2><b>Datos generales del evento</b></h2>
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
                    <h2><b>Imagenes del evento</b></h2>
                    <label>Imagen 1</label>
                    <input name="imagenMain" type="file" id="imagenMain">
                    <label>Imagen 2</label>
                    <input name="imagen2" type="file">
                    <label>Imagen 3</label>
                    <input name="imagen3" type="file">
                    <label>Imagen 4</label>
                    <input name="imagen4" type="file">
                    <input type="hidden" name="userId" value=<?php echo $userId ?>>
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
                                    if( $r->estatus ){
                                        echo "Tu evento ya fue aprobado";
                                    } else{
                                        echo "No han aprobado tu evento";
                                    }
                                ?>
                            </span>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <script src="./src/js/changeWindow.js"></script>

        <?php } ?>

    </div>


</body>

</html>