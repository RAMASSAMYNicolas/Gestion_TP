<?php class EmployeDB{


	function getAllEmploye(){

		$listEmploye = array();
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "SELECT * FROM employe";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Employe(
								$e['loginEmp'], 
								$e['passwordEmp'], 
								$e['nomEmp'], 
								$e['prenomEmp'], 
								$e['dateEmbaucheEmp'], 
								$e['telEmp'], 
								$e['numService'], 
								$e['numTypeLogin']
							);
			$listEmploye->add($emp);
		}

		return $listEmploye;
	}
	
}
?>