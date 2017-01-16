<?php class ServiceDB{


	function getAllService(){

		$listService = array();
		$con = new ConnectionDB().getCon();
		$req = "SELECT * FROM service";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new service(
								$e['numService'], 
								$e['nomService']						
							);
			$listService->add($emp);
		}

		return $listService
	}
	
}
?>