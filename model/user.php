<?php

include_once 'database.php';

class User extends Database{

    private $emailUser;
    private $userName;

    public function userExist( $email, $pass ){
        $query = $this->StartUp()->prepare('SELECT * FROM usuarios WHERE email = :email AND password = :pass ');
        $query->execute( ['email' => $email, 'pass'=> $pass] );

        if($query->rowCount()){
            return true;
        }
        else{
            return false;
        }

    }

    public function setUser( $email ){
        $query = $this->StartUp()->prepare( 'SELECT * FROM usuarios WHERE email = :email ; ' );
        $query->execute( ['email' => $email] );

        foreach ($query as $currentUser) {
            $this->emailUser = $currentUser['email'];
            $this->userName = $currentUser['nombre_usuario'];
        }
    }

    public function getEmail(){
        return $this->emailUser;
    }

}