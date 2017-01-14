<?php class TypeMatDB{


	function getAllTypeMat(){

		$listTypeMat = array();
		$con = new ConnectionDB().getCon();
		$req = "SELECT * FROM type_mat";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new TypeMat(
								$e['numTypeMatt'], 
								$e['nomTypeMat']					
							);
			$listTypeMat->add($emp);
		}

		return $listTypeMat
	}
	
}
?>