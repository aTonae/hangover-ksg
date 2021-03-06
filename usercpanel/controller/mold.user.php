<?php 
require_once "model/fisher.user.php"; 
require_once "model/fisher.key.php"; 
require_once "model/fisher.connection.php"; 








class MoldUser{


	public static function login($data){
	
	$output = array();
	$user = new User();

	$process = $user->login($data);

	if($process['login_status']){

			$_SESSION['user_session'] = $data['username'];
			$_SESSION['user_id'] = $data['username'];
			$_SESSION['identifier'] = $data['username'];

			return $process;

	}else{


		return $process;

	}






	}


	public static function getDataset(){

	$output = array();

	$user = new User();

	$output = $user->getFull(1);

	return $output;

	}


	public static function createUser($input){

	$output = array();

	$user = new User();

	$output['input'] = $input;
	$millitime = round(microtime(true)+3346723456);
	//$input['add_key'] = hash('md5', $millitime.'surendra@salt');

	$input['code'] = $millitime;
	$output['input']['code'] = $millitime;
	$process = $user->insert($input);

	if($process['status']){

		$input['child_id'] = $process['result_id'];
		$output['input']['id'] = $process['result_id'];
		$key = new UserKey();
		$process = $key->update($input['add_key']);

		if($process['status']){

			$output['status'] = true;

			$input['parent_id'] = $_SESSION['identifier'];
			

			$connection = new Connection();

			$process = $connection->insert($input);

			if($process['status']){

			
			$output['status'] = true;
			

			}else{
			$key->update($input['add_key'] , '1');	
			$output['status'] = false;
			}

		}else{
		$output['status'] = false;
		}


	}else{
		$output['status'] = false;
	}

	if($output['status']){

	$output['user_id'] = $input['child_id'];
	$output['add_key'] = $input['add_key'];
	$output['status_detail'] =  array('title' =>"Created Successfully" ,'description'=>'User Created with id '.$input['code'] );

	}
	

	

	return $output;





	}

	public static function loadCreate($input){

		$output = array();

		// $output['code']= $millitime = round(microtime(true)+3346723456);


		// $key = new Key();



		// $output['keys'] = $key->getFull();


		$userKey = new UserKey();

		$output['data'] = $userKey->getUserKey($_SESSION['identifier'] , 1);	

	
	
		$output['status_detail'] =  array('title' =>"Key Retrived" ,'description'=>'User key has fetched');




		return $output;

	}


	public static function getUserDetail($data){


	$output = array();

	$user = new User();

	$process = $user->getUser($data);
	$output = $process;

	$key = new Key();



	$output['keys'] = $key->getFull();

	if($process['status']){
		$output['search'] = true;

	}else{
		$output['search'] = false;
	}

	return $output;


	
	}

	public static function updateUser($data){


	$output = array();

	$user = new User();


	$output = $user->updateUser($data);

	$output = $user->getUser($_SESSION['user_id']);
	


	

	return $output;


	
	}

	public static function deleteUser($data){


	$output = array();

	$user = new User();


	$output = $user->delete($data);
	


	

	return $output;


	
	}




}

?>
