<?php
namespace Acme\Singleton;

class Singleton {
	private static $instance;
	private $props;
	
	private function __construct() {}
	
	public static function getInstance() {
		if(self::$instance === null) {
			self::$instance = new Singleton();
		}
		return self::$instance;
	}
	
	private function __clone() {}
	
	public function __wakeup() {
		return new Exception("Cannot unserialize");	
	}
	
	public function setProp($key, $value) {
		$this->props[$key] = $value;
	}
	
	public function getProp($key) {
		return $this->props[$key];
	}
}
