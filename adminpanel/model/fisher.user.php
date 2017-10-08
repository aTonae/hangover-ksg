<?php 
require_once "config/init.php"; 

class User extends DbInit{


	public $tableName = "users";
	public $data = array();


	function getFull($status=NULL){


		if($this->isConnected()){

			$data['con_error'] = "false";

			if(is_null($status)){

			$query = "SELECT * FROM `users`";

			}else{
			
			$query = "SELECT * FROM `users` WHERE status = '$status'";


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


	function insert($data){
		if($this->isConnected()){
			$data['con_error'] = "false";

			

			


			$query = "INSERT INTO `users`(`name`, `mobile`, `email`, `pass`, `code`, `address`, `add_key`, `status`, `created`, `updated`, `nominee`, `relation`, `dob`, `father_name`) VALUES ('".$data['name']."','".$data['mobile']."','".$data['email']."','".$data['mobile']."','".$data['code']."','".$data['address']."','".$data['add_key']."','1',NOW(),NOW() ,'".$data['nominee']."' , '".$data['relation']."' , '".$data['dob']."','".$data['father_name']."' )";

			$result = mysqli_query($this->getConnection() , $query);

			$data['result_id'] = $this->getConnection()->insert_id;

			if($result){
				$data['mysql_error'] = "false";
				$data['status_detail'] = array("title"=>"Successfully Created","description"=>"User Generated");
				$data['status'] = true;


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = false;

				$data['status_detail'] = array("title"=>"Unable to generate user database error","description"=>mysqli_error($this->getConnection()));

			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = false;
			$data['status_detail'] = array("title"=>"Unable to generate user connection error","description"=>"Cannot make database connection");


		}

		

		return $data;
	}

	function getUser($code){


		if($this->isConnected()){

			$data['con_error'] = "false";

			$query = "SELECT * FROM `users` WHERE id = '$code' OR code = '$code' LIMIT 1";

			

			$result = mysqli_query($this->getConnection() , $query);

			if($result){
				$data['mysql_error'] = "false";


				if($result->num_rows == 0){

					$data['mysql_error'] = "false";
					$data['status_detail'] = array("title"=>"No User with privided details","description"=>"No User Found");
					$data['status'] = false;

					return $data;
				}

			if($row_data  = mysqli_fetch_assoc($result)){

				
				$data['values'] = $row_data;

			}
			
			$data['status_detail'] = array("title"=>"Success","description"=>"User Searched");
				$data['status'] = true;
				
			}else{

				$data['mysql_error'] = "true";
				$data['status_detail'] = array("title"=>"Failed","description"=>"mysqli_error($this->getConnection())");
				$data['status'] = false;
			}
			

		}else{

			$data['con_error'] = "true";
			$data['status_detail'] = array("title"=>"Unable to search user, connection error","description"=>"Cannot make database connection");

		}

		

		return $data;
	}


	function updateUser($data){


		if($this->isConnected()){

			$data['con_error'] = "false";

			$query = "UPDATE `users` SET `name`='".$data['name']."',`mobile`='".$data['mobile']."',`email`= '".$data['email']."',`pass`='".$data['pass']."',`address`='".$data['address']."',`updated`= NOW() ,`nominee`='".$data['nominee']."',`relation`='".$data['relation']."',`dob`='".$data['dob']."',`father_name`='".$data['father_name']."' WHERE code = '".$data['code']."'";

			

			$result = mysqli_query($this->getConnection() , $query);

			if($result){
				$data['mysql_error'] = "false";


				
					$data['status_detail'] = array("title"=>"User Updated","description"=>"User Updated");
					$data['status'] = false;

					
				
			
			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status_detail'] = array("title"=>"Failed","description"=>mysqli_error($this->getConnection()));
				$data['status'] = false;
			}
			

		}else{

			$data['con_error'] = "true";
			$data['status_detail'] = array("title"=>"Unable to update user, connection error","description"=>"Cannot make database connection");

		}

		

		return $data;
	}

	function delete($data){


		if($this->isConnected()){

			$data['con_error'] = "false";

			$query = "UPDATE `users` SET `status`='0',`updated`= NOW() WHERE code = '".$data['code']."'";

			

			$result = mysqli_query($this->getConnection() , $query);

			if($result){
				$data['mysql_error'] = "false";


				
					$data['status_detail'] = array("title"=>"User Deleted","description"=>"User Deleted '".$data['code']."'");
					$data['status'] = false;

					
				
			
			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status_detail'] = array("title"=>"Failed","description"=>mysqli_error($this->getConnection()));
				$data['status'] = false;
			}
			

		}else{

			$data['con_error'] = "true";
			$data['status_detail'] = array("title"=>"Unable to delete user, connection error","description"=>"Cannot make database connection");

		}

		

		return $data;
	}

}
?>
