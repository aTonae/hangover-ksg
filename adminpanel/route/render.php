<?php


class Render{
	
	public static function renderView($data , $view ,$style = NULL , $script = NULL ){

		include 'resources/script/header.php';
		include 'resources/script/nav.php';

		include 'resources/script/head.php';

		include 'resources/script/header.php';

		
		include 'view/'.$view;

		include 'resources/script/footer.php';


	}

}

?>