<?php
class Employe{

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
}
?>