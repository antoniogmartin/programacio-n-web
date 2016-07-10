<?php
class Database
{
    private $host = "localhost";
    private $db_name = "nombre_de_bd";
    private $username = "nombre_user";
    private $password = "contrasenia";
    public $connect;

    public function dbConnection()
	{

	    $this->connect = null;
        try
		{
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connect;
    }
}
?>
