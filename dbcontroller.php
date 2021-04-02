<?php

class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "project_db";
//kanang 'project_db ilisi lang sa database name nami nga naa sa imo g name sa localhost/phpmyadmin/'

	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	
	function selectDB($conn) {
		mysqli_select_db($conn,$this->database);
	}
	
	function runQuery($query) {
		$con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		$result = mysqli_query($con,$query);
		while($row= @mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>