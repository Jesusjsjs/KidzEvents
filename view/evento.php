<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./src/styles/evento.css'>
    <link rel='stylesheet' href='./src/styles/header.css'>
    
    
    <script src='main.js'></script>
</head>
<body>

    <!-- Header -->   
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
                    <?php if( $user->getcorreo() ) { 
                        echo $user->getcorreo();
                    ?>
                        <a href="model/logout.php">Cerrar sesion </a>
                    <?php } else{  ?>
                        <a href="index.php">Home</a>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="heroInfo">
            <div>
                <h2>
                    <?php echo $nombreEventoActual ?>
                </h2>
                <h4>
                    <?php echo $descriptionEvento ?>
                </h4>
            </div>

        </div>
        <img src=<?php echo "./src/imgEventos/." . $imagenMain?>>




    </div>    


    <div class="areaMap">
        <div class="iframePadre">
            <?php echo $ubiEvento ?>
        </div>

        <div class="infoUbi">
            <h3><b>DATOS DEL EVENTO</b></h3>
            <h5><?php echo $nombreEventoActual ?></h5>
        </div>

    </div>

</body>
</html>