<?php
class Intervention{

	private $numIntervention;
	private $dateIntervention;
	private $descriptionIntervention;
	private $numDemande;

	funcion __construct($aNumIntervention, $aDateIntervention, $aDescriptionIntervention , $aNumDemande){

		$this->$numIntervention          = $aNumIntervention;
		$this->$dateIntervention         = $aDateIntervention;
		$this->$descriptionIntervention  = $aDescriptionIntervention;
		$this->$numDemande               = $aNumDemande;
		
	}

	public funcion getNumIntervention(){
		return $this->$numIntervention;
	}

	public funcion setNumIntervention($aNumIntervention){
		$this->$numIntervention = $aNumIntervention;
	}

	public funcion getDateIntervention(){
		return $this->$dateIntervention;
	}

	public funcion setDateIntervention($aDateIntervention){
		$this->$dateIntervention = $aDateIntervention;
	}

	public funcion getDescriptionIntervention(){
		return $this->$descriptionIntervention;
	}

	public funcion setDescriptionIntervention($aDescriptionIntervention){
		$this->$descriptionIntervention = $aDescriptionIntervention;
	}

	public funcion getNumDemande(){
		return $this->$numDemande;
	}

	public funcion setNumDemande($aNumDemande){
		$this->$numDemande = $aNumDemande;
	}

}
?>