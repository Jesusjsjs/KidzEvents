<?php

include_once 'model/user.php';
include_once 'model/user_session.php';
include_once 'model/pedirEventos.php';
include_once 'model/eventos.php';

$userSession = new UserSession();
$user = new User();
$eventos = new pedirEventos();
$eventosManager = new eventos();

if (isset($_SESSION['user'])) {

    $userId = $user->getId($userSession->getCurrentUser());
    if( $user->esAdmin( $userId ) && isset( $_POST["eventoAprobar"] ) ){

        $eventoIdAprobarPost = $_POST["eventoAprobar"];
        $user->adminAprobarEvento( $eventoIdAprobarPost );
        echo $eventoIdAprobarPost;
    }
    // echo $userId;

    // echo $variablePrueba;
    include_once 'view/crearEvento.php';
} else {
    echo 'No hay sesion';
    // header("location: ../index.php");
}