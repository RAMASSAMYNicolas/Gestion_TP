<?php
class Demande{

	private $numDemande;
	private $dateDemande;
	private $descriptionDemande;
	private $loginEmp;

	function __construct($aNumDemande, $aDateDemande, $aDescriptionDemande, $aLoginEmp){

		$this->numDemande          = $aNumDemande;
		$this->dateDemande         = $aDateDemande;
		$this->descriptionDemande  = $aDescriptionDemande;
		$this->loginEmp            = $aLoginEmp;
	}

	public function getNumDemande(){
		return $this->numDemande;
	}
	public function setNumDemande($aNumDemande){
		$this->numDemande = $aNumDemande;
	}

	public function getPassword(){
		return $this->dateDemande;
	}
	public function setPassword($aDateDemande){
		$this->dateDemande = $aDateDemande;
	}

	public function getDescriptionDemande(){
		return $this->descriptionDemande;
	}
	public function setDescriptionDemande($aDescriptionDemande){
		$this->descriptionDemande = $aDescriptionDemande;
	}

	public function getLoginEmp(){
		return $this->loginEmp;
	}
	public function setLoginEmp($aLoginEmp){
		$this->loginEmp = $aLoginEmp;
	}
}
?>