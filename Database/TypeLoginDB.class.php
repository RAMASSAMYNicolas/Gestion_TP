<?php class TypeLoginDB{


	static function getAllTypeLogin(){

		$listTypeLogin = array();
		$connectionDB = new ConnectionDB();
		$con = $connectionDB->getCon();
		$req = "SELECT * FROM type_login";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$typLog = new TypeLogin(
								$e['numTypeLogin'], 
								$e['nomTypeLogin']					
							);
			array_push($listTypeLogin, $typLog);
		}

		return $listTypeLogin;
	}
	
}
?>