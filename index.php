<?php

	class Hair {}
	class ShortHair extends Hair {}
	class LongHair extends Hair {}
	
	class Eyes {}
	class BrownEyes extends Eyes {}
	class GreenEyes extends Eyes {}
	class BlueEyes extends Eyes {}
	
	class CatFactory {
		private $Hair;
		private $Eyes;
		
		function __construct(Hair $hair, Eyes $eyes) {
			$this->Hair = $hair;
			$this->Eyes = $eyes;
		}
		
		function getHair() {
			return clone $this->Hair;
		}
		function getEyes() {
			return clone $this->Eyes;
		}
	}
	
	$Factory = new CatFactory(new ShortHair(), new GreenEyes());
	print_r($factory->getHair());
	print_r($factory->getEyes());
?>