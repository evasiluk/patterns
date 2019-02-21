<?php
namespace Acme\Factory;

class TwitterConnector implements NetworkConnector {
    private $login, $pass;

    public function __construct($login, $pass) {
        $this->login = $login;
        $this->pass = $pass;
    }

    public function login() {
        echo "Login to Twitter via login: " . $this->login . " and password: " . $this->pass . "<br>";
    }

    public function logout() {
        echo "logout From Twitter";
    }

    public function makePost($message) {
        $this->login();
        echo $message . "<br>";
        $this->logout();
    }
}