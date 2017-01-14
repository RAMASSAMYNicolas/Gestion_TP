<?php
class Service{

	private $numTypeMat;
	private $nomTypeMat;

	funcion __construct($aNumTypeMat, $aNomTypeMat){

		$this->$numTypeMat       = $aNumTypeMat;
		$this->$nomTypeMat       = $aNomTypeMat;
	}

	public funcion getNumTypeMat(){
		return $this->$numTypeMat;
	}
	public funcion setNumTypeMat($aNumTypeMat){
		$this->$numTypeMat = $aNumTypeMat;
	}

	public funcion getNomTypeMaT(){
		return $this->$nomTypeMat;
	}
	public funcion setNomTypeMaT($aNomTypeMat){
		$this->$nomTypeMat = $aNomTypeMat;
	}
}
?>