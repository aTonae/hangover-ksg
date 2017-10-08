<?php 
require_once "config/init.php"; 

class Connection extends DbInit{


	public $tableName = "connection";
	public $data = array();


	function getFull(){


		if($this->isConnected()){

			$data['con_error'] = "false";

			$query = "SELECT * FROM `users` WHERE status = 1";

			

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

			

			

			$query = "INSERT INTO `connection`(`parent_id`, `child_id`, `key`, `created`, `updated`, `status`) VALUES ('".$data['parent_id']."','".$data['child_id']."','".$data['add_key']."',NOW(),NOW(),'1')";

			$result = mysqli_query($this->getConnection() , $query);

			$data['result_id'] = $this->getConnection()->insert_id;

			if($result){
				$data['mysql_error'] = "false";
				$data['status_detail'] = array("title"=>"Successfully Created","description"=>"Connection Generated");
				$data['status'] = true;


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = false;

				$data['status_detail'] = array("title"=>"Unable to generate connection database error","description"=>mysqli_error($this->getConnection()));

			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = false;
			$data['status_detail'] = array("title"=>"Unable to generate connection connection error","description"=>"Cannot make database connection");


		}

		

		return $data;
	}
}
?>
