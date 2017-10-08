<?php 
require_once "model/fisher.key.php"; 








class MoldKey{


	public static function getDataset(){

		$output = array();

		$key = new Key();

		$output['data'] = $key->getFull();


		return $output;

		

	}


	public static function createKeys($input){

	$output = array();

	$key = new Key();

	$output['status'] = false;
	$output['keys'] = array();


	$keyCount = $input['count'];

	while ($keyCount != 0) {

	$millitime = microtime(true)*1000;
	$input['key'] = hash('md5', $millitime);
	$process = $key->insert($input);
	if($process['status']){
		array_push($output['keys'],$input['key'] );

		$keyCount--;
		$output['status'] = true;
		$output['status_detail'] = $process['status_detail'];
	}else{

		$output['status'] = false;
		$output['status_detail'] = $process['status_detail'];

		break;
	}
	}

	

	

	return $output;





	}

	public static function loadCreate($input){

		$output = array();

		$ouput['code']= $millitime = round(microtime(true)+3346723456);

		return $ouput;

	}




}

?>
