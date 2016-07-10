<?php

require_once('dbconnect.php');

class DISCO
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


	public function newAlbum($nombre_disco,$autor,$genero)
	{
    try
		{
			$stmt = $this->connect->prepare("INSERT INTO DISCO (nombre_disco,autor,genero)
		                                               VALUES(:nombre_disco,:autor,:genero)");
      $stmt->bindparam(":nombre_disco", $nombre_disco);
			$stmt->bindparam(":autor", $autor);
      $stmt->bindparam(":genero", $genero);

    	$stmt->execute();	//ejecuta la consulta

			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function showAlbums($agenero){

			$stmt = $this->connect->prepare("SELECT * FROM DISCO WHERE genero=:agenero");//queremos todos los albumes
			$stmt->execute(array(':agenero'=>$agenero));//esto ejecuta la consulta teniendo en cuenta el genero deseado
			$rows=$stmt->fetchAll();//devolver el resultado como un array indexado por nombre de columna
			return $rows;
		}


}
?>
