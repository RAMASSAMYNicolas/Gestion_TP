<?php class TypeLoginDB{


	function getAllTypeLogin(){

		$listTypeLogin = array();
		$con = new ConnectionDB().getCon();
		$req = "SELECT * FROM type_login";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new TypeLogin(
								$e['numTypeLogin'], 
								$e['nomTypeLogin']					
							);
			array_push($listTypeLogin, $emp);
		}

		return $listTypeLogin
	}
	
}
?>