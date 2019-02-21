<?php
abstract class Animal {
    abstract public function voice();

    public static function init($animal) {
        return new $animal();
    }
}

class Cat extends Animal {
    public function voice() {
        echo "meow";
    }
}

class Lion extends Animal {
    public function voice() {
        echo "Rrrr";
    }
}

