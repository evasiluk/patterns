<?php
namespace Acme\Factory;

abstract class NetworkPoster {
    protected $login, $pass;

    public function __construct($login, $pass) {
        $this->login = $login;
        $this->pass = $pass;
    }

    abstract protected function getNetwork();

    public function post($message) {
        $network = $this->getNetwork();

        $network->makePost($message);
    }
}