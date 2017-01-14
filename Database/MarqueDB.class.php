<?php class MarqueDB{


	function getAllMarque(){

		$listMarque = array();
		$con = new ConnectionDB().getCon();
		$req = "SELECT * FROM marque";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Marque(
								$e['numMarque'], 
								$e['nomMarque']
							);
			$listMarque->add($emp);
		}

		return $listMarque;
	}
	
}
?>