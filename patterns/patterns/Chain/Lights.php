<?php
namespace Acme\Chain;

class Lights extends Checker {
	public function check($home) {
		if(!$home->LightsAreOff) {
			throw new \Exception('Lights are on! Abort!');
		}
		$this->next($home);	
	}
}
