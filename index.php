<?php
	require_once 'cat.php';
	
	// Runtime Environment
	try {
		$Factory = new CatFactory(new ShortHair(), new GreenEyes());
		print($Factory->getHair());
		print($Factory->getEyes());
	}
	catch (Exception $e) {
		die($e);
	}
?>