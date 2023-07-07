<?php
class eventos
{
	private $pdo;
    
	//Sin referecias, ya que nunca cambiamos el valor siempre lo mantenemos solo lo suamos para comparar.
    public $id;
    public $nombre;
    public $fecha;
    public $lugar;  
    public $descripcion;
    public $unbicacionImg;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM eventosprueba");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM eventosprueba WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM eventosprueba WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE eventosprueba SET 
						nombre      		= ?,
						fecha          = ?, 
						lugar        = ?,
                        descripcion        = ?,
                        unbicacionImg        = ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->nombre, 
                        $data->fecha,                        
                        $data->lugar,
                        $data->descripcion,
                        $data->unbicacionImg, 
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(eventos $data)
	{
		try 
		{
		$sql = "INSERT INTO eventosprueba (nombre,fecha,lugar,descripcion,unbicacionImg) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->nombre, 
                    $data->fecha,
                    $data->lugar, 
                    $data->descripcion, 
                    $data->unbicacionImg 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function ObtenerEventos($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM eventosprueba WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


}