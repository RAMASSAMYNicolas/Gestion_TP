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
		return $this->$nomEmp;
	}
	public funcion setName($aNomEmp){
		$this->$nomEmp = $aNomEmp;
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
		return $this->$telEmp;
	}
	public funcion setTel($aTelEmp){
		$this->$telEmp = $aTelEmp;
	}

	public funcion getNumService(){
		return $this->$numService;
	}
	public funcion setNumService($aNumService){
		$this->$prenomEmp = $aNumService;
	}

	public funcion getnumTypeLogin(){
		return $this->$numTypeLogin;
	}
	public funcion setnumTypeLogin($aNumTypeLogin){
		$this->$numTypeLogin = $aNumTypeLogin;
	}
}
?>