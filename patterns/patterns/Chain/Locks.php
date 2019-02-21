<?php
namespace Acme\Chain;

class Locks extends Checker {
	public function check($home) {
		if(!$home->LocksAreOn) {
			throw new \Exception('Lights are not on! Abort!');
		}
		$this->next($home);	
	}
}
