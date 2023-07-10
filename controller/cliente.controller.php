<?php
require_once 'model/eventos.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new eventos();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';       
    }
    
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';
        
    }
    
    public function Guardar(){
        $eventos = new eventos();
        
        $eventos->id = $_REQUEST['id'];
        $eventos->nombre = $_REQUEST['nombre'];
        $eventos->fecha = $_REQUEST['fecha'];
        $eventos->lugar = $_REQUEST['lugar'];
        $eventos->descripcion = $_REQUEST['descripcion'];  
        $eventos->unbicacionImg = $_REQUEST['unbicacionImg'];    
      

        $eventos->id > 0 
            ? $this->model->Actualizar($eventos)
            : $this->model->Registrar($eventos);
        
            header('Location: admin.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: admin.php');
    }
}