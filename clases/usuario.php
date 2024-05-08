<?php
	class Usuario{
        private $id;
        private $name;
        private $email;
        private $adm;
        private $pass;


        public function __construct($name, $email, $adm, $password)
        {
            $this->name = $name;
            $this->email = $email;
            $this->adm = $adm;
            $this->pass = password_hash($password, PASSWORD_DEFAULT, ['COST' => 10]);
        }
        public function verificarPassword($contrasenyaEntrada)
        {
            return password_verify($contrasenyaEntrada, $this->pass);
        }

    
    
	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param mixed $name 
	 * @return self
	 */
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAdm() {
		return $this->adm;
	}
	
	/**
	 * @param mixed $adm 
	 * @return self
	 */
	public function setAdm($adm): self {
		$this->adm = $adm;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPass() {
		return $this->pass;
	}
	
	/**
	 * @param mixed $pass 
	 * @return self
	 */
	public function setPass($pass): self {
		$this->pass = $pass;
		return $this;
	}
}

?>