<?php

include_once 'model/user.php';
include_once 'model/user_session.php';
include_once 'model/pedirEventos.php';


$userSession = new UserSession();
$user = new User();
$eventos = new pedirEventos();


if( isset($_SESSION['user']) ){

    $user->setUser($userSession->getCurrentUser());

    include_once 'landing.php';

}
else if( isset($_POST['correo']) && isset($_POST['password']) ){
    // echo "validacion de login";

    $emailForm =  $_POST['correo'];
    $passwordForm = $_POST['password'];

    if( $user -> userExist($emailForm, $passwordForm) ){
        $userSession->setCurrentUser($emailForm);
        $user->setUser($emailForm);

        include_once 'landing.php';
    }
    else{
        $errorLogin = "Nombre de usuario y/o contraseña incorrectos";
        include_once 'view/Login.php';
        // echo 'No existe';
    }

}
else{
    include_once 'view/login.php';
}