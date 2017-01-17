<?php
class Materiel {

	private $refMat;
	private $nomModeleMat;
	private $caracteristiquesMat;
	private $dateAchatMat;
	private $loginEmp;
	private $numTypeMat;
	private $numMarqueMat;

	function __construct($aRefMat, $aNomModeleMat, $aCaracteristiquesMat, $aDateAchatMat, $aLoginEmp, $aNumTypeMat, $aNumMarqueMat){

		$this->refMat         				= $aRefMat;
		$this->nomModeleMat    			= $aNomModeleMat;
		$this->caracteristiquesMat         = $aCaracteristiquesMat;
		$this->dateAchatMat		        = $aDateAchatMat;
		$this->loginEmp 					= $aLoginEmp;
		$this->numTypeMat       			= $aNumTypeMat;
		$this->numMarqueMat     			= $aNumMarqueMat;
	}

	public function getRefMat(){
		return $this->refMat;
	}
	public function setRefMat($aRefMat){
		$this->refMat = $aRefMat;
	}

	public function getModel(){
		return $this->nomModeleMat;
	}
	public function setModel($aNomModeleMat){
		$this->nomModeleMat = $aNomModeleMat;
	}

	public function getCaracteristiques(){
		return $this->caracteristiquesMat;
	}
	public function setName($aCaracteristiquesMat){
		$this->caracteristiquesMat = $aCaracteristiquesMat;
	}

	public function getDateAchat(){
		return $this->dateAchatMat;
	}
	public function setDateAchat($aDateAchatMat){
		$this->dateAchatMat = $aDateAchatMat;
	}

	public function getLogin(){
		return $this->loginEmp;
	}
	public function setLogin($aLoginEmp){
		$this->loginEmp = $aLoginEmp;
	}
	public function getNumTypeMat(){
		return $this->numTypeMat;
	}
	public function setNumTypeMat($aNumTypeMat){
		$this->numTypeMat = $aNumTypeMat;
	}

	public function getNumMarqueMat(){
		return $this->$numMarqueMat;
	}
	public function setNumMarqueMat($aNumMarqueMat){
		$this->$numMarqueMat = $aNumMarqueMat;
	}
}
?>