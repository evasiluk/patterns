<?php
namespace Acme\Factory;

class FacebookPoster extends NetworkPoster {
    protected function getNetwork() {
        return new FacebookConnector($this->login, $this->pass);
    }
}