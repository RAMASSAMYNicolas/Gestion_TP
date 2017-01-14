<?php class MaterielDB{


	function getAllMateriel(){

		$listMateriel = array();
		$con = new ConnectionDB().getCon();
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
			$listMateriel->add($emp);
		}

		return $listMateriel
	}
	
}
?>
