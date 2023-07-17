<?php

include_once 'model/user.php';

$user = new User();

if( 
    isset($_POST['nombreCompleto']) && 
    isset($_POST['nombre_usuario']) && 
    isset($_POST['correo']) && 
    isset($_POST['password'])
    ){

    $nombreCompletoForm = $_POST['nombreCompleto'];
    $nombre_usuarioForm = $_POST['nombre_usuario'];
    $correoForm =  $_POST['correo'];
    $passwordForm = $_POST['password'];

    $user->createUser( $correoForm, $passwordForm, $nombre_usuarioForm, $nombreCompletoForm  ); 

    header('Location: index.php');
    echo 'Exito al crear bienvenido ' . $nombre_usuarioForm;

}
else{
    
    echo "No hay nada";
}