<?php

require_once 'database.php';
class eventos extends Database{

	public function registrar( $nombreEvento, $horaEvento, $descriptionEvent, $ubiEventos, $directionEventos ){
		 $query = $this->StartUp()->prepare( 'INSERT INTO eventosprueba' );
	}

}	