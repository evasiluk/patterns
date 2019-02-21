<?php
require "vendor/autoload.php";

use Acme\Decorator\CarService;
use Acme\Decorator\BasicService;
use Acme\Decorator\OilChange;
use Acme\Decorator\TyreChange;

function checkout(CarService $service) {
    echo $service->getDescription() . "<br>";
    echo "Cost : " . $service->getCost();
}

$service = new BasicService();
$service = new OilChange(new BasicService());
$service = new OilChange(new TyreChange(new BasicService()));

checkout($service);