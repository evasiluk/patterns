<?php
namespace Acme\Prototype;

class Factory {
	private $sea;
	private $terrain;
	
	public function __construct(Sea $sea, Terrain $terrain) {
		$this->sea = $sea;
		$this->terrain = $terrain;	
	}
	
	public function getSea() {
		return clone $this->sea;	
	}
	
	public function getTerrain() {
		return clone $this->terrain;	
	}
} 