<?php


include_once 'database.php';

class pedirEventos extends Database{

    public function pedirEventosToDB(){
        $result = array();

        $stm = $this->StartUp()->prepare("SELECT * FROM eventos");
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
    }


    public function pedirEventosAprobados(){
        $result = array();

        $stm = $this->StartUp()->prepare("SELECT * FROM eventos WHERE estatus = 1");
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

}

?>