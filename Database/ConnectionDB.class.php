<?php 
class ConnectionDB{
	private $HOST = "localhost";
	private $HOSTNAME ="root";
	private $PASSWORD = "";
	//private $DBNAME = "SIOA_S2_PRJ1";
	private $DBNAME = "SIOA_TP_PRJ1";
	private $conn;
	private $EMAIL;
	private $MDP;

	function __construct() {
		$this->conn=mysqli_connect($this->HOST,$this->HOSTNAME,$this->PASSWORD,$this->DBNAME);
	}

	public function getCon(){
		return $this->conn;
	}
}
?>