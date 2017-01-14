<?php
class Employe {

	private $loginEmp;
	private $passwordEmp;
	private $nomEmp;
	private $prenomEmp;
	private $dateEmbaucheEmp;
	private $telEmp;
	private $numService;
	private $numTypeLogin;

	funcion __construct($aLoginEmp, $aPasswordEmp, $aNomEmp, $aPrenomEmp, $aDateEmbaucheEmp, $aTelEmp, $aNumService, $aNumTypeLogin){

		$this->$loginEmp         = $aLoginEmp;
		$this->$passwordEmp      = $aPasswordEmp;
		$this->$nomEmp           = $aNomEmp;
		$this->$prenomEmp        = $aPrenomEmp;
		$this->$dateEmbaucheEmp  = $aDateEmbaucheEmp;
		$this->$telEmp           = $aTelEmp;
		$this->$numService       = $aNumService;
		$this->$numTypeLogin     = $aNumTypeLogin;
	}

	public funcion getLogin(){
		return $this->$loginEmp;
	}
	public funcion setLogin($aLogin){
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

	public funcion getDateEmbauche(){
		return $this->$dateEmbaucheEmp;
	}
	public funcion setDate($aDateEmbaucheEmp){
		$this->$dateEmbaucheEmp = $aDateEmbaucheEmp;
	}
	public funcion getTel(){
		return $this->$TelEmp;
	}
	public funcion setTel($aTelEmp){
		$this->$TelEmp = $aTelEmp;
	}

	public funcion getNumService(){
		return $this->$numService;
	}
	public funcion setNumService($anumService){
		$this->$prenomEmp = $anumService;
	}

	public funcion getnumTypeLogin(){
		return $this->$NumTypeLogin;
	}
	public funcion setnumTypeLogin($aNumTypeLogin){
		$this->$NumTypeLogin = $aNumTypeLogin;
	}
}
?>