<?php

include 'render.php';
include 'controller/mold.user.php';
include 'controller/mold.key.php';
include 'controller/mold.user_key.php';



class Route{
	
public static $static_url = "/asg/usercpanel/";
public static $controller_url = "controller/";


public static function login($data){

	$output = array();
	$output = MoldUser::login($data);


	return $output;
}

public static function requestPost($url , $data){
	$url_prefix = Route::$static_url;

	switch ($url) {
		case $url_prefix.'create_user':

			

			$data = array_merge($data,MoldUser::createUser($data));


			Render::renderView($data , 'show_user.php');

			break;
		case $url_prefix.'update_user':

			//$data['input'] = $data;

			
			//$data['input'] = array_merge($data['input'],MoldUser::updateUser($data));
			$data['input'] = MoldUser::updateUser($data)['values'];
			Render::renderView($data , 'show_user.php');

			break;	
		case $url_prefix.'create_key':

		$data['input'] = $data;
		$data['output'] = MoldKey::createKeys($data);

		Render::renderView($data , 'show_keys.php');

		break;


		case $url_prefix.'assign_key':

		

		$data= MoldUserKey::assingKeyToUser($data);


		



		Render::renderView($data , 'user_key.html');

		break;

		
		default:
			echo "Not fine";
			break;
	}

}


public static function requestGet($url , $data){

	$url_prefix = Route::$static_url;
	switch ($url) {
		case $url_prefix.'user':


		if(array_key_exists("action",$data) && $data['action'] == 'update'){

			$data['input']= MoldUser::getUserDetail($data['code'])['values'];
			Render::renderView($data , 'show_user.php');



		}elseif(array_key_exists("action",$data) && $data['action'] == 'view'){

			$data['input']= MoldUser::getUserDetail($data['code'])['values'];
			Render::renderView($data , 'show_user.php');

		}elseif(array_key_exists("action",$data) && $data['action'] == 'delete'){

			$data = MoldUser::deleteUser($data);

			$data = array_merge($data,MoldUser::getDataset());

			
			Render::renderView($data , 'user_list.php');

		}else{

			$data['input']= MoldUser::getUserDetail($_SESSION['user_id'])['values'];
			Render::renderView($data , 'show_user.php');
		}

			

			break;
		case $url_prefix.'create_user':

			$data = MoldUser::loadCreate($data);
			Render::renderView($data , 'create_user.php');

			break;

		case $url_prefix.'create_key':

		$data = MoldKey::getDataset();
		Render::renderView($data , 'create_key.php');

		break;

		case $url_prefix.'assign_key':

		
		$data['search'] = false;

		if(array_key_exists("action",$data) && $data['action'] == 'search'){

			$data= MoldUser::getUserDetail($data['code']);


		}



		Render::renderView($data , 'search_user.html');

		break;

		case $url_prefix.'testlab':

		
		Render::renderView($data , 'testlab.php');

		break;


		
		default:
			include 'view/welcome.php';
			break;
	}
}
}

?>