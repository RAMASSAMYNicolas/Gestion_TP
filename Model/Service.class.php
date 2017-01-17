<?php
class Service{

	private $numService;
	private $nomService;

	function __construct($aNumService, $aNomService){

		$this->numService       = $aNumService;
		$this->nomService       = $aNomService;
	}

	public function getNumDemande(){
		return $this->numService; 
	}
	public function setNumDemande($aNumService){
		$this->numService = $aNumService; 
	}

	public function getNomService(){
		return $this->nomService;
	}
	public function setPassword($aNomService){
		$this->nomService = $aNomService; }
}
?>