<?php
namespace Acme\Decorator;

class TyreChange implements CarService {
    private $carservice;

    public function __construct(CarService $carService) {
        $this->carservice = $carService;
    }

    public function getDescription() {
        return $this->carservice->getDescription() . ", and tyre change";
    }

    public function getCost() {
        return 31 + $this->carservice->GetCost();;
    }
}