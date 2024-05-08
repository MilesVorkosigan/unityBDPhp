<?php
class EstadisticasJugador
{

    private $idJugador;
    private $numGames;
    private $numVictories;
    private $numLosers;
    private $bestScore;
    private $worsScore;
    public function __construct($id)
    {
        $this->idJugador = $id;
        $this->numGames = 0;
        $this->numVictories = 0;
        $this->numLosers = 0;
        $this->bestScore = 0;
        $this->worsScore = 0;
    }
    public function datosJugador($id, $numGames, $numVictories, $bestScore, $worsScore)
    {
        $this->idJugador = $id;
        $this->numGames = $numGames;
        $this->numVictories = $numVictories;
        $this->bestScore = $bestScore;
        $this->worsScore = $worsScore;


    }

	/**
	 * @return mixed
	 */
	public function getIdJugador() {
		return $this->idJugador;
	}
	
	/**
	 * @param mixed $idJugador 
	 * @return self
	 */
	public function setIdJugador($idJugador): self {
		$this->idJugador = $idJugador;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumGames() {
		return $this->numGames;
	}
	
	/**
	 * @param mixed $numGames 
	 * @return self
	 */
	public function setNumGames($numGames): self {
		$this->numGames = $numGames;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumVictories() {
		return $this->numVictories;
	}
	
	/**
	 * @param mixed $numVictories 
	 * @return self
	 */
	public function setNumVictories($numVictories): self {
		$this->numVictories = $numVictories;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumLosers() {
		return $this->numLosers;
	}
	
	/**
	 * @param mixed $numLosers 
	 * @return self
	 */
	public function setNumLosers($numLosers): self {
		$this->numLosers = $numLosers;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBestScore() {
		return $this->bestScore;
	}
	
	/**
	 * @param mixed $bestScore 
	 * @return self
	 */
	public function setBestScore($bestScore): self {
		$this->bestScore = $bestScore;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getWorsScore() {
		return $this->worsScore;
	}
	
	/**
	 * @param mixed $worsScore 
	 * @return self
	 */
	public function setWorsScore($worsScore): self {
		$this->worsScore = $worsScore;
		return $this;
	}
} ?>