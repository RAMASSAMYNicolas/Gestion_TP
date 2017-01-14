<?php
class TypeLogin{

	private $numTypeLogin;
	private $nomTypeLogin;


	funcion __construct($aNumTypeLogin, $aNomTypeLogin){

		$this->$numTypeLogin  = $aNumTypeLogin;
		$this->$nomTypeLogin  = $aNomTypeLogin;
		

	}

	public funcion getNumTypeLogin(){
		return $this->$numTypeLogin;
	}

	public funcion setNumTypeLogin($aNumTypeLogin){
		$this->$numTypeLogin = $aNumTypeLogin;
	}

	public funcion getNomTypeLogin(){
		return $this->$nomTypeLogin;
	}

	public funcion setNomTypeLogin($aNomTypeLogin){
		$this->$nomTypeLogin = $aNomTypeLogin;
	}
}
?>