<?php class MaterielDB{


	static function getAllMateriel(){

		$listMateriel = array();
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "SELECT * FROM materiel";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$mat = new Materiel(
								$e['refMat'], 
								$e['nomModeleMat'], 
								$e['caracteristiquesMat'], 
								$e['dateAchatMat'], 
								$e['loginEmp'], 
								$e['numTypeMat'], 
								$e['numMarque']						
							);
			array_push($listMateriel, $mat);
		}
		return $listMateriel;
	}	

	static function deleteMateriel($aRefMat){
		$this->refMat = $aRefMat;
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "DELETE FROM materiel WHERE refMat = '".$aRefMat."' ";
		$result = $con->query($req);

	}

	/*static function setNewMateriel($aRefMat, $aNomModeleMat, $aCaracteristiquesMat, $aDateAchatMat, $aLoginEmp, $aNumTypeMat, $aNumMarque){

		$listMateriel = array();
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "INSERT INTO materiel VALUES('".$aRefMat."', '".$aNomModeleMat."', '".$aCaracteristiquesMat."', '".$aDateAchatMat."', '".$aEmployer."', '".$aNumTypeMat."', '".$aNumMarque."')";
		if (mysqli_query($con, $req)) { 
			echo "New record created successfully";
		} 
		else { 
			echo "Error: " . $req . "<br>" . mysqli_error($con); 
		}
	}
	*/
}
?>
