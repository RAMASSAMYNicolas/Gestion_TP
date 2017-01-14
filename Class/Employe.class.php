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

	function __construct($aLoginEmp, $aPasswordEmp, $aNomEmp, $aPrenomEmp, $aDateEmbaucheEmp, $aTelEmp, $aNumService, $aNumTypeLogin){

		$this->$loginEmp         = $aLoginEmp;
		$this->$passwordEmp      = $aPasswordEmp;
		$this->$nomEmp           = $aNomEmp;
		$this->$prenomEmp        = $aPrenomEmp;
		$this->$dateEmbaucheEmp  = $aDateEmbaucheEmp;
		$this->$telEmp           = $aTelEmp;
		$this->$numService       = $aNumService;
		$this->$numTypeLogin     = $aNumTypeLogin;
	}

	public function getLogin(){
		return $this->$loginEmp;
	}
	public function setLogin($aLogin){
		$this->$loginEmp = $aLogin;
	}

	public function getPassword(){
		return $this->$passwordEmp;
	}
	public function setPassword($aPasswordEmp){
		$this->$passwordEmp = $aPasswordEmp;
	}

	public function getName(){
		return $this->$nomEmp;
	}
	public function setName($aNomEmp){
		$this->$nomEmp = $aNomEmp;
	}

	public function getFirstName(){
		return $this->$prenomEmp;
	}
	public function setFirstName($aPrenomEmp){
		$this->$prenomEmp = $aPrenomEmp;
	}

	public function getDateEmbauche(){
		return $this->$dateEmbaucheEmp;
	}
	public function setDate($aDateEmbaucheEmp){
		$this->$dateEmbaucheEmp = $aDateEmbaucheEmp;
	}
	public function getTel(){
		return $this->$telEmp;
	}
	public function setTel($aTelEmp){
		$this->$telEmp = $aTelEmp;
	}

	public function getNumService(){
		return $this->$numService;
	}
	public function setNumService($aNumService){
		$this->$prenomEmp = $aNumService;
	}

	public function getnumTypeLogin(){
		return $this->$numTypeLogin;
	}
	public function setnumTypeLogin($aNumTypeLogin){
		$this->$numTypeLogin = $aNumTypeLogin;
	}
}
?>