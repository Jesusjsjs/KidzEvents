<?php

require_once 'model/pedirEventos.php';

$eventos = new pedirEventos();

$eventos = $eventos-> pedirEventosToDB();

echo $eventos;