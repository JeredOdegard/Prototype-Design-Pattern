<?php
	class Config {
		private static $instance;
		private $properties;
		
		private $CatHair;
		private $CatEyes;
		
		private function __constructor() {}	
		public static function getInstance() {
			if (empty(self::$instance)) {
				self::$instance = new Config();
			}
			return self::$instance;
		}
		public function __get($property) {
			$method = "get{$property}";
			if (method_exists($this, $method)) {
				return $this->$method();
			}
		}
		public function __set($property, $value) {
			$method = "set{$property}";
			if (method_exists($this, $method)) {
				return $this->$method($value);
			}
		}
		
		public function getProperty($key) {
			return $this->properties[$key];
		}
		public function setProperty($key, $val) {
			$this->properties[$key] = $val;
		}
		private function getCatHair() {
			return $this->CatHair;
		}
		private function setCatHair(Hair $hair) {
			$this->CatHair = $hair;
		}
		private function getCatEyes() {
			return $this->CatEyes;
		}
		private function setCatEyes(Eyes $eyes) {
			$this->CatEyes = $eyes;
		}
	}

?>