<?php
class Employe{

	private $loginEmp;
	private $passwordEmp;
	private $nomEmp;
	private $prenomEmp;

	function __construct($aLoginEmp, $aPasswordEmp, $aNomEmp, $aPrenomEmp){

		$this->$numDemande       = $aLoginEmp;
		$this->$passwordEmp      = $aPasswordEmp;
		$this->$nomEmp           = $aNomEmp;
		$this->$prenomEmp        = $aPrenomEmp;
	}

	public function getNumDemande(){
		return $this->$loginEmp;
	}
	public function setNumDemande($aLoginEmp){
		$this->$loginEmp = $aLoginEmp;
	}

	public function getPassword(){
		return $this->$passwordEmp;
	}
	public function setPassword($aPasswordEmp){
		$this->$passwordEmp = $aPasswordEmp;
	}

	public function getName(){
		return $this->$NomEmp;
	}
	public function setName($aNomEmp){
		$this->$NomEmp = $aNomEmp;
	}

	public function getFirstName(){
		return $this->$prenomEmp;
	}
	public function setFirstName($aPrenomEmp){
		$this->$prenomEmp = $aPrenomEmp;
	}
}
?>