<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidz Events</title>

    <link rel="stylesheet" href="./src/styles/home.css" />
    <link rel="icon" type="image/png" href="./src/img/logoKidzEvents.png">


</head>
<body>
    
    <header>
        <div>
            <nav>
                <ul>
                    <li>Inicio</li>
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
    <!-- Hero -->

    <div class="hero">
        <div class="infoHero" >
            <div class="infoHeroChild"> 
                <img class="imgInfoHero" alt="logo-kidz-events" src="./src/img/logoHero.png">
                <h2>Busca, crea e inscribete a <b>eventos escolares </b></h2>
                <div>
                    <button class="buttonBlue">Ver eventos</button> 
                    <button class="buttonPink">Inscribirse</button>
                </div>
            </div>

        </div>

        <!-- Imagenes right -->
        <div class="imgsHeroRight">
            <img src="./src/img/kidHeroBg.jpg" class="imagenHeroRight"  >
            <img src="./src/img/girlHeroBg.jpg"  class="imagenHeroRight" >
        </div>

    </div>
    <!-- Final del hero -->


    <!-- Eventos info -->
    <div class="infoProximosEventos">
        <h2><b>Proximos eventos</b></h2>
    </div>

    <div class="events">
    
        <div class="eventsContainer">

            <?php foreach($eventos->pedirEventosAprobados() as $r): ?>
                <div class="cardEvento">
                    <?php 
                        $nombreMainImg = $r->imagenMain;
                        $pathImagen = './src/imgEventos/' . $nombreMainImg;
                    ?>
                    <img src=<?php echo $pathImagen ?>>
                    <div class="cardEventoInfo" >
   
                        <h3><?php echo $r->nombreEvento ?></h3>
                        <h4><?php echo $r->descriptionEvento ?></h4>
                        <h5><?php echo $r->horaEvento ?></h5>
                        <button >Ver evento</button>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <div class="containerSearch">

        </div>

    </div>

    <!-- Barra buscador -->
    <!-- <div class="buscadorBlue">
        <div>
            <h2>Buscar evento</h2>
            <input placeholder="Buscar evento" />
        </div>
        
    </div> -->

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