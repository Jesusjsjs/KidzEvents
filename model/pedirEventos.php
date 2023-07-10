<?php


include_once 'database.php';

class pedirEventos extends Database{

    public function pedirEventosToDB(){
        $result = array();

        $stm = $this->StartUp()->prepare("SELECT * FROM eventosprueba");
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

}

?>