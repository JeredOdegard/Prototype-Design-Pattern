<?php
	interface Attribute {
		function __toString();
	}
	abstract class Hair implements Attribute {}
	class ShortHair extends Hair {
		public function __toString() {
			return "I have short hair.\n";
		}
	}
	class LongHair extends Hair {
		public function __toString() {
			return "I have long hair.\n";
		}
	}
	
	abstract class Eyes implements Attribute {}
	class BrownEyes extends Eyes {
		public function __toString() {
			return "I have brown eyes.\n";
		}
	}
	class GreenEyes extends Eyes {
		public function __toString() {
			return "I have green eyes.\n";
		}
	}
	class BlueEyes extends Eyes {
		public function __toString() {
			return "I have blue eyes.\n";
		}
	}
	
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
	try {
		$Factory = new CatFactory(new ShortHair(), new GreenEyes());
		print($Factory->getHair());
		print($Factory->getEyes());
	}
	catch (Exception $e) {
		die($e);
	}
?>