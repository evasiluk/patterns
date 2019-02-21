<?php
require "vendor/autoload.php";

use Acme\Prototype\MarsSea;
use Acme\Prototype\MarsTerrain;
use Acme\Prototype\EarthSea;
use Acme\Prototype\EarthTerrain;
use Acme\Prototype\Factory;
$r = new MarsSea();
$factory = new Factory(new EarthSea(), new EarthTerrain());

$sea = $factory->getSea();
$sea->run();

$terrain = $factory->getTerrain();
$terrain->run();