<?php

class Conexion
{
    private $pdo;
    private $servidor = "mysql:host=127.0.0.1;dbname=";
    private $usuari = "arena";
    private $pass = "password";
	private $db="arena";
    public function __construct()
    {
        try {
            $this->pdo = new PDO("" . $this->servidor.$this->db, $this->usuari, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connectat..";
        } catch (PDOException $e) {
            die ("Connexió fallida: " . $e->getMessage());
        }
       //CAS DE CONNEXIO AMB UNA BASE DE DADES CREAR AMB DOCKER 
// $dsn = 'mysql:host=DOCKER_CONTAINER_IP;port=DOCKER_EXPOSED_PORT;dbname=DATABASE_NAME';
// $username = 'DATABASE_USERNAME';
// $password = 'DATABASE_PASSWORD';

// try {
//     $dbh = new PDO($dsn, $username, $password);
//     echo "Conexión exitosa";
// } catch (PDOException $e) {
//     echo "Error de conexión: " . $e->getMessage();
// }


    }
    public function closeConnection()
    {
        $this->pdo = null;
        echo "Connexió conclosa." . PHP_EOL;
    }


	/**
	 * @return mixed
	 */
	public function getPdo() {
		return $this->pdo;
	}
	
	/**
	 * @param mixed $pdo 
	 * @return self
	 */
	public function setPdo($pdo): self {
		$this->pdo = $pdo;
		return $this;
	}
}
?>