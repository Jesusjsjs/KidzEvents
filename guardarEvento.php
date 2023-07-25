<?php

include_once './model/user.php';

//Hay mucho codigo que podemos optimizar    

$usuarioElements = new User();

if (isset($_POST['nombreEvento']) && isset($_POST['horaEvento']) && isset($_POST['descriptionEvento']) && isset($_POST['ubiEvento']) && isset($_POST['directionEvento']) && !empty($_FILES['imagenMain']['name']) && !empty($_FILES['imagen2']['name']) && !empty($_FILES['imagen3']['name']) && !empty($_FILES['imagen4']['name'])  ) {


    $idUser = $_POST['userId'];
    $nombreEvento = $_POST['nombreEvento'];
    $horaEvento = $_POST['horaEvento'];
    $descriptionEvento = $_POST['descriptionEvento'];
    $ubiEvento = $_POST['ubiEvento'];
    $directionEvento = $_POST['directionEvento'];
    
    //Mover las cuatro imagenes
    // echo $idUser;

    $carpetaDestinoPath = './src/imgEventos/';

    //Para la imagen main
    $imagenMainTemporalPath = $_FILES['imagenMain']['tmp_name'];
    $nuevoImagenMainNombre = uniqid( 'IMG_', true );
    $destinoImagen = $carpetaDestinoPath . $nuevoImagenMainNombre;
    move_uploaded_file($imagenMainTemporalPath, $destinoImagen);

    //Para la imagen2
    $imagen2TemporalPath = $_FILES['imagen2']['tmp_name'];
    $nuevoImagen2 = uniqid( 'IMG_', true );
    $destinoImagen2 =  $carpetaDestinoPath . $nuevoImagen2;
    move_uploaded_file($imagen2TemporalPath, $destinoImagen2 );

    //Para la imagen3
    $imagen3TemporalPath = $_FILES['imagen3']['tmp_name'];
    $nuevoImagen3 = uniqid( 'IMG_', true );
    $destinoImagen3 = $carpetaDestinoPath . $nuevoImagen3;
    move_uploaded_file( $imagen3TemporalPath, $destinoImagen3 );

    //Para la imagen4
    $imagen4TemporalPath = $_FILES['imagen4']['tmp_name'];
    $nuevoImagen4 = uniqid( 'IMG_', true );
    $destinoImagen4 =  $carpetaDestinoPath . $nuevoImagen4;
    move_uploaded_file( $imagen4TemporalPath, $destinoImagen4 );


    $usuarioElements->createEvento($idUser, $nombreEvento, $horaEvento, $descriptionEvento, $ubiEvento, $directionEvento, $nuevoImagenMainNombre, $nuevoImagen2, $nuevoImagen3, $nuevoImagen4);


    include_once 'view/registrado.php';
    // include_once 'view/eventosUser.php';
    // header('Location: dashboardUser.php');

} else {
    echo 'No hay data';
}
