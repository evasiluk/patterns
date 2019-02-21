<?php
namespace Acme\Command;

class Receiver
{
    public function doSomething(string $a)
    {
        echo "Receiver: Working on (".$a.".)\n";
    }

public function doSomethingElse(string $b)
    {
        echo "Receiver: Also working on (".$b.".)\n";
    }
}