<?php
namespace Acme\Decorator;

class BasicService implements CarService {
    public function getDescription() {
        return "Basic inspection";
    }

    public function getCost() {
        return 20;
    }
}