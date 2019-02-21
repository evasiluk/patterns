<?php
abstract class networkPoster {
    abstract function getNetwork();

    public function post($text) {
        $network = $this->getNetwork();
        $network->makePost($text);
    }
}

class FacebookPoster extends networkPoster {
    private $login, $pass;

    public function __construct($login, $pass) {
        $this->login = $login;
        $this->pass = $pass;
    }

    public function getNetwork() {
        return new FacebookConnector($this->login, $this->pass);
    }
}

class TwitterPoster extends networkPoster {
    private $login, $pass;

    public function __construct($login, $pass) {
        $this->login = $login;
        $this->pass = $pass;
    }

    public function getNetwork() {
        return new TwitterConnector($this->login, $this->pass);
    }
}

interface networkConnector {
    public function login();
    public function logout();
    public function makePost($message);
}

class FacebookConnector implements networkConnector {
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function login() {
        echo "connect via login: " . $this->login . " and pass: " . $this->password;
    }

    public function logout() {
        echo "logout";
    }

    public function makePost($message) {
        echo $message;
    }
}

class TwitterConnector implements networkConnector {
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function login() {
        echo "connect via login: " . $this->login . " and pass: " . $this->password;
    }

    public function logout() {
        echo "logout";
    }

    public function makePost($message) {
        echo $message;
    }
}

$poster = new FacebookPoster("admin", "qazwsx");
$poster->post("some message in FB");