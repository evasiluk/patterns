<?php
interface CarService {
    public function getDescription();
    public function getCost();
}

class BasicService implements CarService {
    public function getDescription() {
        return "Basic inspection";
    }

    public function getCost() {
        return 20;
    }
}

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

function checkout(CarService $service) {
    echo $service->getDescription() . "<br>";
    echo "Cost : " . $service->getCost();
}

$service = new BasicService();

$service = new OilChange(new BasicService());

$service = new TyreChange(new BasicService());

$service = new OilChange(new TyreChange(new BasicService()));
checkout($service);