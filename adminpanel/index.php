<?php
session_start();
require 'route/route.php';
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$url  = $_SERVER['REQUEST_URI'];
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$url = $uri_parts[0];
$method = $_SERVER['REQUEST_METHOD'];

if($url == '/asg/adminpanel/session'){
	

	include 'resources/script/session.php';

	return;
}

if(isset($_SESSION['email'])){


	switch ($method) {

    case 'POST':
    
       Route::requestPost($url  ,$_POST);

        break;
    case 'GET':

        Route::requestGet($url  ,$_GET);

        break;
    default:
    
        break;
     }
}else{





	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];

		$password =  $_POST['password'];

		if($username == "asg" && $password == '234'){
		
			//session_start();
		

			$_SESSION['email'] = $username;

			echo "<script>window.open('user','_self')</script>";
		}else{


		include 'view/adminlogin.php';

		}


	}else{
		


		include 'view/adminlogin.php';
	}



}






?>


