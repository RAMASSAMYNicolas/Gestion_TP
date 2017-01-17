<?php
class TypeLogin{

	private $numTypeLogin;
	private $nomTypeLogin;


	function __construct($aNumTypeLogin, $aNomTypeLogin){

		$this->$numTypeLogin  = $aNumTypeLogin;
		$this->$nomTypeLogin  = $aNomTypeLogin;
		

	}

	public function getNumTypeLogin(){
		return $this->numTypeLogin;
	}

	public function setNumTypeLogin($aNumTypeLogin){
		$this->numTypeLogin = $aNumTypeLogin;
	}

	public function getNomTypeLogin(){
		return $this->nomTypeLogin;
	}

	public function setNomTypeLogin($aNomTypeLogin){
		$this->nomTypeLogin = $aNomTypeLogin;
	}
}
?>