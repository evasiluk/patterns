<?php 
namespace Acme\Chain;

abstract class Checker {
	private $successor;
	
	abstract public function check($home);
	
	public function succeedWith(Checker $next) {
		$this->successor = $next;	
	}
	
	public function next($home) {
		if($this->successor) {
			$this->successor->check($home);
		}
	}
}