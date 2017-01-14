<?php
class Materiel {

	private $refMat;
	private $nomModeleMat;
	private $caracteristiquesMat;
	private $dateAchatMat;
	private $loginEmp;
	private $numTypeMat;
	private $numMarqueMat;

	funcion __construct($aRefMat, $aNomModeleMat, $aCaracteristiquesMat, $aDateAchatMat, $aLoginEmp, $aNumTypeMat, $aNumMarqueMat){

		$this->$refMat         				= $aRefMat;
		$this->$nomModeleMat    			= $aNomModeleMat;
		$this->$caracteristiquesMat         = $aCaracteristiquesMat;
		$this->$dateAchatMat		        = $aDateAchatMat;
		$this->$loginEmp 					= $aLoginEmp;
		$this->$numTypeMat       			= $aNumTypeMat;
		$this->$numMarqueMat     			= $aNumMarqueMat;
	}

	public funcion getRefMat(){
		return $this->$loginEmp;
	}
	public funcion setRefMat($aRefMat){
		$this->$refMat = $aRefMat;
	}

	public funcion getModel(){
		return $this->$nomModeleMat;
	}
	public funcion setModel($aNomModeleMat){
		$this->$nomModeleMat = $aNomModeleMat;
	}

	public funcion getCaracteristiques(){
		return $this->$caracteristiquesMat;
	}
	public funcion setName($aCaracteristiquesMat){
		$this->$caracteristiquesMat = $aCaracteristiquesMat;
	}

	public funcion getDateAchat(){
		return $this->$dateAchatMat;
	}
	public funcion setDateAchat($aDateAchatMat){
		$this->$dateAchatMat = $aDateAchatMat;
	}

	public funcion getLogin(){
		return $this->$loginEmp;
	}
	public funcion setLogin($aLoginEmp){
		$this->$loginEmp = $aLoginEmp;
	}
	public funcion getNumTypeMat(){
		return $this->$numTypeMat;
	}
	public funcion setNumTypeMat($aNumTypeMat){
		$this->$numTypeMat = $aNumTypeMat;
	}

	public funcion getNumMarqueMat(){
		return $this->$numMarqueMat;
	}
	public funcion setNumMarqueMat($aNumMarqueMat){
		$this->$numMarqueMat = $aNumMarqueMat;
	}
}
?>