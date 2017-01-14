<?php
class Service{

	private $numService;
	private $nomService;

	funcion __construct($aNumService, $aNomService){

		$this->$numService       = $aNumService;
		$this->$nomService       = $aNomService;
	}

	public funcion getNumDemande(){
		return $this->$numService;
	}
	public funcion setNumDemande($aNumService){
		$this->$numService = $aNumService;
	}

	public funcion getPassword(){
		return $this->$nomService;
	}
	public funcion setPassword($aNomService){
		$this->$nomService = $aNomService;
	}
}
?>