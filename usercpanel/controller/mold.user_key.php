<?php 
require_once "model/fisher.user.php"; 
require_once "model/fisher.key.php"; 
require_once "model/fisher.connection.php"; 
require_once "model/fisher.user_key.php"; 








class MoldUserKey{


	public static function getDataset($input){


	
		

	}


	public static function assingKeyToUser($input){

	$output = array();

	$output['input'] = $input;
	$userKey = new UserKey();

	//code to generate key

	$output['status'] = false;


	$keyCount = $input['count'];

	while ($keyCount != 0) {

	$millitime = microtime(true)*1000;
	$input['add_key'] = hash('md5', $millitime);
	$process = $userKey->insert($input);

	if($process['status']){

	$output['status'] = true;

	}else{

	$output['status'] = false;

	}	

	$keyCount--;

	}

	//code ended


	


	

	if($output['status']){

	$output['data'] = $userKey->getUserKey($input['code']);	

	
	
	$output['status_detail'] =  array('title' =>"Key Assinged" ,'description'=>'User have given the key');

	}
	

	

	return $output;





	}

	






}

?>
