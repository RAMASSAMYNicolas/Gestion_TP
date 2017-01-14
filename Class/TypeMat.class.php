<?php
class Service{

	private $numTypeMat;
	private $nomTypeMat;

	function __construct($aNumTypeMat, $aNomTypeMat){

		$this->$numTypeMat       = $aNumTypeMat;
		$this->$nomTypeMat       = $aNomTypeMat;
	}

	public function getNumTypeMat(){
		return $this->$numTypeMat;
	}
	public function setNumTypeMat($aNumTypeMat){
		$this->$numTypeMat = $aNumTypeMat;
	}

	public function getNomTypeMaT(){
		return $this->$nomTypeMat;
	}
	public function setNomTypeMaT($aNomTypeMat){
		$this->$nomTypeMat = $aNomTypeMat;
	}
}
?>