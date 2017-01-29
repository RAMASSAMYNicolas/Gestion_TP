<?php class MarqueDB{

	static function getAllMarque(){

		$listMarque = array();
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "SELECT * FROM marque";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Marque(
								$e['numMarque'], 
								$e['nomMarque']
							);
			array_push($listMarque, $emp);
		}

		return $listMarque;
	}

	//function CreateMarque($listMarque){
	//	$req = "INSERT INTO marque VALUES('"$marque->getNumMarque()."','".$marque->getNomMarque()."')";
	//}
	
}
?>