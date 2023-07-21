<?php
include_once "./model/user.php";
$user = new User();



$idEvento = $_GET["idEvento"];
$dataEvento = $user->pedirEventoPorId( $idEvento );


// $nombreEventoActual;
// $horaEvento;
// $descriptionEvento;
// $ubiEvento;
// $directionEvento; 
// $imagenMain; 
// $imagen2;
// $imagen3;
// $imagen4;


foreach ($dataEvento as $key) {
    $nombreEventoActual = $key -> nombreEvento;
    // $horaEvento = $key -> $horaEvento;
    $descriptionEvento = $key -> descriptionEvento;
    $ubiEvento = $key-> ubiEvento;
    $directionEvento = $key-> direccionEvento; 
    $imagenMain = $key-> imagenMain; 
    $imagen2 = $key-> imagen2;
    $imagen3 = $key-> imagen3;
    $imagen4 = $key-> imagen4;
}


include_once "./view/evento.php";

