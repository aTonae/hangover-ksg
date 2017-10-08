<?php 
require_once "config/init.php"; 

class Key extends DbInit{


	public $tableName = "unlock_key";
	public $data = array();


	function getFull($status = NULL){

		$status = is_null($status)?1:$status;

		if($this->isConnected()){

			$data['con_error'] = "false";

			$query = "SELECT * FROM `unlock_key` WHERE status = '$status'";

			

			$result = mysqli_query($this->getConnection() , $query);

			if($result){
				$data['mysql_error'] = "false";

			$data_list = array();

			while($row_data  = mysqli_fetch_assoc($result)){

				array_push($data_list , $row_data);

			}
			$data['values'] = $data_list;
				
			}else{

				$data['mysql_error'] = "true";
			}
			

		}else{

			$data['con_error'] = "true";

		}

		

		return $data;
	}


	function insert($data){
		if($this->isConnected()){
			$data['con_error'] = "false";

			

			

			$query = "INSERT INTO `unlock_key`(`key`, `created`, `updated`, `status`, `is_active`) VALUES ('".$data['key']."',NOW(),NOW(),'1','1')";

			$result = mysqli_query($this->getConnection() , $query);

			$data['result_id'] = $this->getConnection()->insert_id;

			if($result){
				$data['mysql_error'] = "false";
				$data['status_detail'] = array("title"=>"Successfully Created","description"=>"Key Generated");
				$data['status'] = true;


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = false;
				$data['status_detail'] = array("title"=>"Unable to generate key database error","description"=>mysqli_error($this->getConnection()));


			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = false;
			$data['status_detail'] = array("title"=>"Unable to generate key connection error","description"=>"Cannot make database connection");



		}

		

		return $data;
	}


	function update($key , $status=NULL){


		$status = is_null($status)?0:$status;

		if($this->isConnected()){
			$data['con_error'] = "false";

			

			

			$query = "UPDATE `unlock_key` SET `updated`=NOW(),`status`='$status',`is_active`='$status' WHERE `key`='$key'";

			$result = mysqli_query($this->getConnection() , $query);

			

			if($result){
				$data['mysql_error'] = "false";
				$data['status_detail'] = array("title"=>"Successfully Updated","description"=>"Key Updated");
				$data['status'] = true;


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = false;
				$data['status_detail'] = array("title"=>"Unable to update key database error","description"=>mysqli_error($this->getConnection()));


			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = false;
			$data['status_detail'] = array("title"=>"Unable to update key connection error","description"=>"Cannot make database connection");



		}

		

		return $data;
	}
}
?>
