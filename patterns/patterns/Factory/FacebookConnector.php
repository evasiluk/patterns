<?php
namespace Acme\Factory;

class FacebookConnector implements NetworkConnector {
    protected $login, $pass;

    public function __construct($login, $pass) {

        $this->login = $login;
        $this->pass = $pass;
    }

    public function login() {
        echo "Login to Facebook via login: " . $this->login . " and password: " . $this->pass . "<br>";
    }

    public function logout() {
        echo "logout From Facebook";
    }

    public function makePost($message) {
        $this->login();
        echo $message . "<br>";
        $this->logout();
    }
}