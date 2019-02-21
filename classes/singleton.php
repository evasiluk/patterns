<?php
class singleton {
    private $props = array();
    private static $instance;

    private function __construct() {}

    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new singleton();
        }
        return self::$instance;
    }

    public function setProperty($key, $value) {
        $this->props[$key] = $value;
    }

    public function getProperty() {
        print_r($this->props);
    }
}

