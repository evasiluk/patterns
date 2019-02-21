<?php
 
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require "vendor/autoload.php";

use Acme\Chain\Alarm;
use Acme\Chain\Lights;
use Acme\Chain\Locks;

class Request {
	public $alarmIsOn = true;
	public $LightsAreOff = true;
	public $LocksAreOn = true;
}


$status = new Request(); 

$alarm = new Alarm();
$lights = new Lights();
$locks = new Locks();

$lights->succeedWith($locks);
$locks->succeedWith($alarm);

$lights->check($status);
