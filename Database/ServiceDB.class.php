<?php class ServiceDB{


	function getAllService(){

		$listService = array();
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "SELECT * FROM service";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new service(
								$e['numService'], 
								$e['nomService']						
							);
			array_push($listService, $emp);
		}

		return $listService;
	}
	
}
?>