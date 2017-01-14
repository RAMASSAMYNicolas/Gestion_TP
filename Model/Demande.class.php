<?php
class Employe{

	private $loginEmp;
	private $passwordEmp;
	private $nomEmp;
	private $prenomEmp;

	funcion __construct($aLoginEmp, $aPasswordEmp, $aNomEmp, $aPrenomEmp){

		$this->$numDemande       = $aLoginEmp;
		$this->$passwordEmp      = $aPasswordEmp;
		$this->$nomEmp           = $aNomEmp;
		$this->$prenomEmp        = $aPrenomEmp;
	}

	public funcion getNumDemande(){
		return $this->$loginEmp;
	}
	public funcion setNumDemande($aLogin){
		$this->$loginEmp = $aLogin;
	}

	public funcion getPassword(){
		return $this->$passwordEmp;
	}
	public funcion setPassword($aPasswordEmp){
		$this->$passwordEmp = $aPasswordEmp;
	}

	public funcion getName(){
		return $this->$aNomEmp;
	}
	public funcion setName($aNomEmp){
		$this->$NomEmp = $aNomEmp;
	}

	public funcion getFirstName(){
		return $this->$prenomEmp;
	}
	public funcion setFirstName($aPrenomEmp){
		$this->$prenomEmp = $aPrenomEmp;
	}
}
?>