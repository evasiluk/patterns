<?php
namespace Acme\Factory;

class TwitterPoster extends NetworkPoster {
    protected function getNetwork() {
        return new TwitterConnector($this->login, $this->pass);
    }
}