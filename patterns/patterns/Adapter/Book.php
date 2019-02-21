<?php
namespace Acme\Adapter;

class Book implements BookInterface {
    public function open() {
        echo "Open the book <br>";
    }

    public function turnPage() {
        echo "Turn the Page <br>";
    }
}