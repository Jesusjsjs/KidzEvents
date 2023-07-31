<?php
include_once "./model/user.php";
include_once "./model/user_session.php";

$user = new User();
$session = new UserSession();


$idEvento = $_GET["idEvento"];
$dataEvento = $user->pedirEventoPorId( $idEvento );



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

