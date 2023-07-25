<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./src/styles/login.css" />
    <link rel="stylesheet" href="./src/styles/home.css" />

  </head>
<body>


 <!-- Hero -->

    <div class="hero">
        <div class="infoHero" >
            <div class="infoHeroChild"> 
                <img class="imgInfoHero" alt="logo-kidz-events" src="./src/img/logoHero.png">
                <h2>Busca, crea e inscribete a <b>eventos escolares </b></h2>
                <div>
                    <a href="#eventos" class="buttonBlue">Ver eventos</a>      
                    
                </div>
            </div>

        </div>

        <!-- Imagenes right -->
        <div class="imgsHeroRight">
            <img src="./src/img/kidHeroBg.jpg" class="imagenHeroRight"  >
            <img src="./src/img/girlHeroBg.jpg"  class="imagenHeroRight" >

            <div id="logins" class="login-page">
              <div class="form">
                <form action="./crearUsuario.php" class="register-form" method="POST">
                  <h2>REGISTRESE</h2>
                  
                  <input 
                    name="nombreCompleto" 
                    type="text" 
                    placeholder="Nombre completo *" 
                    required
                  />
                  <input 
                    name="nombre_usuario"
                    type="text" 
                    placeholder="Nomobre de usuario *" 
                    required
                  />
                  <input 
                    name="correo"
                    type="email" 
                    placeholder="Correo electronico *" 
                    required
                  />
                  <input 
                    name="password"
                    type="password" 
                    placeholder="Contraseña *" 
                    required
                  />
                  
                  <button type="submit">CREAR</button>
                  <p class= "message">Ya te registraste? <a href="#">Inicia sesion</a></p>
                </form>
                
                <form class= "login-form" method="post">
                  <h2 >BIENVENIDO</h2>
                  <input 
                      name="correo" 
                      class="inputLogin" 
                      type="text" 
                      placeholder="Correo electronico" 
                      required 
                  />
                  <input 
                      name="password" 
                      class="inputLogin" 
                      type="password" 
                      placeholder="Contraseña" 
                      required 
                  />
                  <button type="submit" name="send2">LOGIN</button>
                  <p class="message">No te haz registrado? <a href="#" style>Crea una cuenta</a></p>
                </form>
                <?php
                    
                    if( isset($errorLogin) ){
                      echo ' <span class="errorLogin"> ' . $errorLogin . '</span>' ;
                    }
                  ?>
              </div>
            </div>
        </div>

    </div>
    <!-- Final del hero -->







  <div id="eventos" class="infoProximosEventos">
        <h2><b>Eventos</b></h2>
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
                    <a href=<?php echo "evento.php?idEvento=". $r->idEvento ?> ><button > Ver evento </button></a>
                </div>
            </div>

        <?php endforeach; ?>

   </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./src/js/login.js"></script>
</body>
</html>