<?php class MaterielDB{


	function getAllMateriel(){

		$listMateriel = array();
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "SELECT * FROM materiel";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Materiel(
								$e['refMat'], 
								$e['nomModeleMat'], 
								$e['caracteristiquesMat'], 
								$e['dateAchatMat'], 
								$e['loginEmp'], 
								$e['numTypeMat'], 
								$e['numMarque']						
							);
			array_push($listMateriel, $emp);
		}

		return $listMateriel
	}
	
}
?>
