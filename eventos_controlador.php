<?php
    // Obtener el JSON desde una fuente externa o un archivo local
    $json = file_get_contents('http://localhost/ird/crudPHP/pedirUsers.php');

    // Decodificar el JSON en un objeto o arreglo en PHP
    $data = json_decode($json);



    // Acceder a los datos del JSON y mostrarlos
    foreach ($data as $item) {
        echo"<div class='cardEvento'>";
            echo "<img src='./src/img/provDB/imgProvDB.jpg' class='imgCardEvento'/>";
            echo "<div class='cardEventoInfo'>";
            echo "<h5>". $item->nombre ."</h5>";
            echo "<h5>". $item->nombre ."</h5>";
            echo " <button>Ver evento</button>";
        echo"</div>";

    }
?>

            
            <!-- Card ejemplo -->
            <!-- <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>

            <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div>
            
            <div class="cardEvento">
                <img src="./src/img/provDB/imgProvDB.jpg" class="imgCardEvento"/>
                <div class="cardEventoInfo">
                    <h5>Name evento hasta 5 chars..</h5>
                    <div class="dateInfo">
                        <h5>date</h5><h5>hour</h5>
                    </div>
                    <button>Ver evento</button>
                </div>
            </div> -->