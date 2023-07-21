<?php

include_once 'database.php';

class User extends Database{

    private $correoUser;
    private $userName;
    private $userId;

    public function userExist( $correo, $pass ){
        $query = $this->StartUp()->prepare('SELECT * FROM usuarios WHERE correo = :correo AND password = :pass ');
        $query->execute( ['correo' => $correo, 'pass'=> $pass] );

        if($query->rowCount()){
            return true;
        }
        else{
            return false;
        }

    }

    public function setUser( $correo ){
        $query = $this->StartUp()->prepare( 'SELECT * FROM usuarios WHERE correo = :correo ; ' );
        $query->execute( ['correo' => $correo] );

        foreach ($query as $currentUser) {
            $this->correoUser = $currentUser['correo'];
            $this->userName = $currentUser['nombre_usuario'];
            $this->userId = $currentUser['id'];
        }
    }

    public function getcorreo(){
        return $this->correoUser;
    }

    public function getId( $correo ){
        $query = $this->StartUp()->prepare( 'SELECT * FROM usuarios WHERE correo = :correo ; ' );
        $query->execute( ['correo' => $correo] );

        foreach ($query as $currentUser) {
            return $this->userId = $currentUser['id'];
        }
    }

    public function createUser( $correo, $password, $nombre_usuario, $nombre_completo ){

        $query = $this->StartUp()->prepare(
            'INSERT INTO usuarios (correo, password, nombre_usuario, nombre_completo)
            VALUES ( :correo , :password , :nombre_usuario , :nombre_completo );'
        );
        $query->execute( [
            'correo' => $correo,
            'password' => $password,
            'nombre_usuario' => $nombre_usuario,
            'nombre_completo' => $nombre_completo
        ] );
        
    }

    public function createEvento($idUser, $nombreEvento, $horaEvento, $descriptionEvento, $ubiEvento, $directionEvento, $imagenMain, $imagen2, $imagen3, $imagen4) {
        $valorTinyint = false; // Valor booleano que quieres insertar

        $query = $this->StartUp()->prepare(
            'INSERT INTO eventos (idCreador, nombreEvento, horaEvento, descriptionEvento, ubiEvento, direccionEvento, imagenMain, imagen2, imagen3, imagen4, estatus)
            VALUES ( :idCreador, :nombreEvento, :horaEvento, :descriptionEvento, :ubiEvento, :directionEvento, :imagenMain, :imagen2, :imagen3, :imagen4, :status)'
        );
        
        $query->bindParam(':idCreador', $idUser);
        $query->bindParam(':nombreEvento', $nombreEvento);
        $query->bindParam(':horaEvento', $horaEvento);
        $query->bindParam(':descriptionEvento', $descriptionEvento);
        $query->bindParam(':ubiEvento', $ubiEvento);
        $query->bindParam(':directionEvento', $directionEvento);
        $query->bindParam(':imagenMain', $imagenMain);
        $query->bindParam(':imagen2', $imagen2);
        $query->bindParam(':imagen3', $imagen3);
        $query->bindParam(':imagen4', $imagen4);
        $query->bindValue(':status', $valorTinyint, PDO::PARAM_INT); // Utilizamos PDO::PARAM_INT para indicar que es un entero
        
        $query->execute();
        
    }

    public function getEventsOfUser( $idUser ){
    
        $result = array();
        $stm = $this->StartUp()->prepare("SELECT * FROM eventos WHERE idCreador = :idUser");
        $stm->execute([
            'idUser' => $idUser
        ]);

        return $stm->fetchAll(PDO::FETCH_OBJ);
    
    }

    public function editarEvento( $idUser ){

    }

    public function adminAprobarEvento( $idEvento ){
        $query = $this->StartUp()->prepare('UPDATE eventos SET estatus = :estatus WHERE idEvento = :idEvento');
        $query->execute([
            'estatus' => 1,
            'idEvento' => $idEvento
        ]);
    }

    public function eliminarEvento( $idUser ){

    }

    public function adminLeerEventos( $idUser ){

    } 

    public function esAdmin($idUsuario){
        $query = $this->StartUp()->prepare(
            "SELECT COUNT(*) as count
            FROM usuarios u
            INNER JOIN admins a ON u.id = a.idUser
            WHERE u.id = :idUsuario"
        );

        $query->execute([
            ':idUsuario'=> $idUsuario
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $esAdmin = ($result['count'] > 0);

        return $esAdmin;
    }

    public function pedirEventoPorId( $idEvento ){
        $result = array();
        $stm = $this->StartUp()->prepare("SELECT * FROM eventos WHERE idEvento = :idEvento");
        $stm->execute([
            'idEvento' => $idEvento
        ]);

        return $stm->fetchAll(PDO::FETCH_OBJ);
    
    }

}