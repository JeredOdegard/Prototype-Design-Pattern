<?php
	require_once dirname(__FILE__) . '/cat.php';
	require_once dirname(__FILE__) . '/config/config.php';
	
	// Runtime Environment
	try {
		$Config = Config::getInstance();
		$Config->CatHair = new ShortHair();
		$Config->CatEyes = new BrownEyes();
		
		$Factory = new CatFactory($Config->CatHair, $Config->CatEyes);
		print($Factory->getHair());
		print($Factory->getEyes());
	}
	catch (Exception $e) {
		die($e);
	}
?>