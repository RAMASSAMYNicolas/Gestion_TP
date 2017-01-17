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
			array_push($listTypeMat, $emp);
		}

		return $listTypeMat
	}
	
}
?>