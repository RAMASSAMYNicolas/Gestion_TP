<?php
class Intervention{

	private $numIntervention;
	private $dateIntervention;
	private $descriptionIntervention;
	private $numDemande;

	function __construct($aNumIntervention, $aDateIntervention, $aDescriptionIntervention , $aNumDemande){

		$this->numIntervention          = $aNumIntervention;
		$this->dateIntervention         = $aDateIntervention;
		$this->descriptionIntervention  = $aDescriptionIntervention;
		$this->numDemande               = $aNumDemande;
		
	}

	public function getNumIntervention(){
		return $this->numIntervention;
	}

	public function setNumIntervention($aNumIntervention){
		$this->numIntervention = $aNumIntervention;
	}

	public function getDateIntervention(){
		return $this->dateIntervention;
	}

	public function setDateIntervention($aDateIntervention){
		$this->dateIntervention = $aDateIntervention;
	}

	public function getDescriptionIntervention(){
		return $this->descriptionIntervention;
	}

	public function setDescriptionIntervention($aDescriptionIntervention){
		$this->descriptionIntervention = $aDescriptionIntervention;
	}

	public function getNumDemande(){
		return $this->numDemande;
	}

	public function setNumDemande($aNumDemande){
		$this->$numDemande = $aNumDemande;
	}

}
?>