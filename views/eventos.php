<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/home.css"/>
    <title>Eventos</title>
</head>
<body>
    
    <!-- Header for changes -->
    <header>
        <div>
            <nav>
                <ul>
                    <li>Inicio</li>
                    <li>Crear</li>
                    <li>Favoritos</li>
                </ul>
            </nav>

            <div class="userPass">
                <ul>
                    <li class="signIn">Sign In</li>
                    <li class="logIn">Log In</li>
                </ul>
            </div>
        </div>
    </header>


     <!-- Eventos info -->
     <div class="infoProximosEventos">
        <h2><b>Proximos eventos</b></h2>
    </div>

    <div class="events">
        
        <?php
            // Obtener el JSON desde una fuente externa o un archivo local
            $json = file_get_contents('http://localhost/ird/crudPHP/pedirUsers.php');

            // Decodificar el JSON en un objeto o arreglo en PHP
            $data = json_decode($json);
        ?>
        

        <div class="eventsContainer">

                <?php
                    // Acceder a los datos del JSON y mostrarlos
                    foreach ($data as $item) {
                    echo'<div class="cardEvento">';
                        echo "<img src='../src/img/provDB/imgProvDB.jpg' class='imgCardEvento'/>";
                        echo "<div class='cardEventoInfo'>";
                        echo "<h5>". $item->nombre ."</h5>";
                        echo "<h6>". $item->apellido ."</h6>";
                        echo " <button>Ver evento</button>";
                        echo"</div>";
                    echo"</div>";
                }

                ?>

        </div>



        <!-- <div class="eventsContainer">
            
            <!-- Card ejemplo -->
            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>
            
            <div class="cardEvento">
                <img src=".././src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

        </div> -->

        <div class="containerSearch">

        </div>

    </div>

    <!-- Barra buscador -->
    <div class="buscadorBlue">
        <div>
            <h2>Buscar evento</h2>
            <input placeholder="Buscar evento" />
        </div>
        
    </div>

    <footer>
        <div class="footerChild">
            <img src=".././src/img/logoColors.png" />
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