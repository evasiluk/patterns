<?php
namespace Acme\Command;

class SimpleCommand implements Command {
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute()
    {
        echo "SimpleCommand: See, I can do simple things like printing (".$this->payload.")\n";
    }
}