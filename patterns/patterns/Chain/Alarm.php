<?php
namespace Acme\Chain;

class Alarm extends Checker {
	public function check($home) {
		if(!$home->alarmIsOn) {
			throw new \Exception('Alarm is off! Abort!');
		}
		$this->next($home);	
	}
}
