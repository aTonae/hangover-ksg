<?php
class DbInit{


	public $db_name = "development";
	public $db_user = "coder_data";
	public $db_pass = "coder@123";
	public $server = "obleamlabs.com";

	public $con;


	function connectDB(){
		$this->con = mysqli_connect($this->server , $this->db_user ,$this->db_pass , $this->db_name);


	}

	function isConnected(){
		$this->connectDB();

		if($this->con){
			return TRUE;
		}else{
			return FALSE;
		}

	
	}

	function getConnection(){
		return $this->con;
	}


}

?>
