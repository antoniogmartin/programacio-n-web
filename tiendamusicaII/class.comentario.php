<?php

require_once('dbconnect.php');

class COMENTARIO
{

	private $connect;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->connect = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->connect->prepare($sql);//representa la consulta preparada
		return $stmt;
	}

	public function makeComment($cnick,$cfecha,$chora,$cgenero,$ctexto)
	{
    try
		{
			$stmt = $this->connect->prepare("INSERT INTO COMENTARIO (nick,hora,fecha,genero,texto)
		                                               VALUES(:cnick,:chora,:cfecha,:cgenero,:ctexto)");
      $stmt->bindparam(":cnick", $cnick);
			$stmt->bindparam(":chora", $chora);
      $stmt->bindparam(":cfecha", $cfecha);
			$stmt->bindparam(":cgenero", $cgenero);
			$stmt->bindparam(":ctexto", $ctexto);

    	$stmt->execute();	//ejecuta la consulta

			return $stmt;
		}
		catch(PDOException $e)
		{ echo $e->getMessage();
		}
	}
	public function showComments($cgenero){
		$stmt = $this->connect->prepare("SELECT * FROM COMENTARIO WHERE genero=:cgenero ORDER BY 'hora' DESC");//queremos todos los comentarios
		$stmt->execute(array(':cgenero'=>$cgenero));
		$rows=$stmt->fetchAll();//devolver el resultado como un array indexado por nombre de columna
		return $rows;
		}
		public function countComments($cgenero){
			$stmt = $this->connect->prepare("SELECT * FROM COMENTARIO WHERE genero=:cgenero ORDER BY 'hora' DESC");//queremos todos los comentarios
			$stmt->execute(array(':cgenero'=>$cgenero));
			$cuenta=$stmt->rowCount();
			return $cuenta;

		}
	}


?>
