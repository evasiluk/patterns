<?php
namespace Acme\Adapter;

class Kindle implements ReaderInterface {
    public function turnOn() {
        echo "Turn reader on <br>";
    }

    public function pressNextButton() {
        echo "Press next button <br>";
    }
}