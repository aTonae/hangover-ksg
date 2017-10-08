<?php 
require_once "config/init.php"; 

class UserKey extends DbInit{


	public $tableName = "user_key";
	public $data = array();


	function getFull($status = NULL){

		$status = is_null($status)?true:$status;


		if($this->isConnected()){

			$data['con_error'] = "false";

			$query = "SELECT * FROM `user_key` WHERE status = '$status'";

			

			$result = mysqli_query($this->getConnection() , $que);

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

			
			$query = "INSERT INTO `user_key`(`code`, `key`, `created`, `updated`, `is_active`, `status`) VALUES ('".$data['code']."' , '".$data['add_key']."' , NOW() , NOW() , '1' , '1')";

			$result = mysqli_query($this->getConnection() , $query);

			$data['result_id'] = $this->getConnection()->insert_id;

			if($result){
				$data['mysql_error'] = "false";
				$data['status_detail'] = array("title"=>"Successfully Assigned key","description"=>"key assigned to user");
				$data['status'] = true;


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = false;

				$data['status_detail'] = array("title"=>"Unable to assing key database error","description"=>mysqli_error($this->getConnection()));

			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = false;
			$data['status_detail'] = array("title"=>"Unable to assign key, connection error","description"=>"Cannot make database connection");


		}

		

		return $data;
	}


	function getUserKey($code , $status = NULL){

		


		if($this->isConnected()){

			$data['con_error'] = "false";

			if($status == NULL){

			$query = "SELECT * FROM `user_key` WHERE code = '$code'";

			}else{
			
			$query = "SELECT * FROM `user_key` WHERE code = '$code' AND status = '$status' AND is_active = '$status'";


			}

			

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


	function update($key , $status=NULL){


		$status = is_null($status)?0:$status;

		if($this->isConnected()){
			$data['con_error'] = "false";

			

			

			


			$query = "UPDATE `user_key` SET `updated`=NOW(),`is_active`='$status',`status`='$status' WHERE `key` = '$key'";

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
