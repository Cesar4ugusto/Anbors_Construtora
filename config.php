<?php
	
	$autoload = function($class){
		if($class == 'Email'){
			require_once('class/phpmailer/PHPMailerAutoload.php');
		}
		include('class/'.$class.'.php');
	};
	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/LandingPage2/');

?>