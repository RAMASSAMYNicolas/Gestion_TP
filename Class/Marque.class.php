<?php
class Marque{

	private $numMarque;
	private $nomMarque;


	function __construct($aNumMarque, $aNomMarque){

		$this->$numMarque  = $aNumMarque;
		$this->$nomMarque  = $aNomMarque;
		

	}

	public function getNumMarque(){
		return $this->$numMarque;
	}

	public function setNumMarque($aNumMarque){
		$this->$numMarque = $aNumMarque;
	}

	public function getNomMarque(){
		return $this->$nomMarque;
	}

	public function setNomMarque($aNomMarque){
		$this->$nomMarque = $aNomMarque;
	}
}
?>