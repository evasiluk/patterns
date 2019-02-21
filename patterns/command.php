<?php
require "vendor/autoload.php";

use Acme\Command\SimpleCommand;
Use Acme\Command\ComplexCommand;
Use Acme\Command\Receiver;
Use Acme\Command\Invoker;

$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Hello world"));

$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, "aaa", "bbb"));

$invoker->doSomethingImportant();