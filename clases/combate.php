<?php
class Combate
{
    private $idPartida;
    private $idJugador1;
    private $idJugador2;
    private $result;
    public function __construct($idPartida, $idJugador1, $idJugador2)
    {
        $this->idPartida = $idPartida;
        $this->idJugador1 = $idJugador1;
        $this->idJugador2 = $idJugador2;
        //resultat en cas de 0 empat o inici partida en cas 1 gunayador 1 jugador i 2 guanyador 2
        $this->result = 0;

    }


	/**
	 * @return mixed
	 */
	public function getIdPartida() {
		return $this->idPartida;
	}
	
	/**
	 * @param mixed $idPartida 
	 * @return self
	 */
	public function setIdPartida($idPartida): self {
		$this->idPartida = $idPartida;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdJugador1() {
		return $this->idJugador1;
	}
	
	/**
	 * @param mixed $idJugador1 
	 * @return self
	 */
	public function setIdJugador1($idJugador1): self {
		$this->idJugador1 = $idJugador1;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdJugador2() {
		return $this->idJugador2;
	}
	
	/**
	 * @param mixed $idJugador2 
	 * @return self
	 */
	public function setIdJugador2($idJugador2): self {
		$this->idJugador2 = $idJugador2;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getResult() {
		return $this->result;
	}
	
	/**
	 * @param mixed $result 
	 * @return self
	 */
	public function setResult($result): self {
		$this->result = $result;
		return $this;
	}
}
?>