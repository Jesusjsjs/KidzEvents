<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./src/styles/login.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
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
          placeholder="Nombre de usuario" 
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./src/js/login.js"></script>
</body>
</html>