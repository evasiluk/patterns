<?php
namespace Acme\Template;

abstract class Parser {	
	public function run() {
		if($this->checkFile()) {
			$this->parse();
			$this->saveInDB();
		}	
	}
	
	private function checkFile() {
		//if file exists
		return true;
	}
	
	abstract protected function parse();
	
	private function saveInDB() {
		echo "Saving data in DB... Data saved.";	
	}
	
	
}