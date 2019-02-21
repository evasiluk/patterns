<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "vendor/autoload.php";

use Acme\Singleton\Singleton;

$instance = Singleton::getInstance();

$instance->setProp("name", "Ivan");
echo $instance->getProp("name");

unset($instance);

$instance2 = Singleton::getInstance();
echo $instance2->getProp("name");
