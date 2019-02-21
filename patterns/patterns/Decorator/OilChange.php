<?php
namespace Acme\Decorator;

class OilChange implements CarService {
    private $carservice;

    public function __construct(CarService $carService) {
        $this->carservice = $carService;
    }

    public function getDescription() {
        return $this->carservice->getDescription() . ", and oil change";
    }

    public function getCost() {
        return 25 + $this->carservice->GetCost();
    }
}