<?php
class Marque{

	private $numMarque;
	private $nomMarque;


	funcion __construct($aNumMarque, $aNomMarque){

		$this->$numMarque  = $aNumMarque;
		$this->$nomMarque  = $aNomMarque;
		

	}

	public funcion getNumMarque(){
		return $this->$numMarque;
	}

	public funcion setNumMarque($aNumMarque){
		$this->$numMarque = $aNumMarque;
	}

	public funcion getNomMarque(){
		return $this->$nomMarque;
	}

	public funcion setNomMarque($aNomMarque){
		$this->$nomMarque = $aNomMarque;
	}
}
?>