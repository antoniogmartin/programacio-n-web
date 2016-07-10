<?php

require_once('dbconnect.php');

class USUARIO
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

	public function registrar($unick,$unombre,$uapellidos,$umail,$upass,$udir_postal,$ucod_postal,$uprovincia,$udni,$uvisa,$uobservaciones,$uenvio)
	{
		try
		{
			//$password_hashed = password_hash($upass, PASSWORD_DEFAULT);// para hashear la password

			$stmt = $this->connect->prepare("INSERT INTO usuario(nick,nombre,apellidos,email,clave,dir_postal,cod_postal,provincia,dni,visa,observaciones,envio)
		                                               VALUES(:unick, :unombre, :uapellidos, :umail, :upass, :udir_postal, :ucod_postal, :uprovincia, :udni, :uvisa, :uobsevaciones, :uenvio)");
      $stmt->bindparam(":unick", $unick);
			$stmt->bindparam(":unombre", $unombre);
      $stmt->bindparam(":uapellidos", $uapellidos);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass",$upass);//$stmt->bindparam(":upass",$password_hashed);
      $stmt->bindparam(":udir_postal", $udir_postal);
      $stmt->bindparam(":ucod_postal", $ucod_postal);
      $stmt->bindparam(":uprovincia", $uprovincia);
      $stmt->bindparam(":udni", $udni);
      $stmt->bindparam(":uvisa", $uvisa);
      $stmt->bindparam(":uobsevaciones", $uobsevaciones);
      $stmt->bindparam(":uenvio", $uenvio);

    	$stmt->execute();	//ejecuta la consulta

			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function doLogin($unick,$upass)
	{
		try
		{
			$stmt = $this->connect->prepare("SELECT * FROM usuario WHERE nick=:unick");
			$stmt->execute(array(':unick'=>$unick));//asocia a la clave :unick el valor $unick
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)//si solo hay un resultado para la consulta
			{

				if($userRow['clave']==$upass)//if(password_verify($upass,$userRow['clave']))

				{
					$_SESSION['usuario_sesion'] = $userRow['nick']; //iniciar sesion
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function is_loggedin()
	{
		if(isset($_SESSION['usuario_sesion']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");//te envia a la página pasada por argumentos
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['usuario_sesion']);
		return true;
	}
}
?>
