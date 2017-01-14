<?php

public class ConnectionDB{
	private $HOST = "localhost";
	private $HOSTNAME ="root";
	private $PASSWORD = "";
	private $DBNAME = "SIOA_TP_PRJ1";
	private $conn;

	fonction __construct() {
		$conn=mysqli_connect($this->$HOST,$this->HOSTNAME,$this->$PASSWORD,$this->$DBNAME);
	}


?>