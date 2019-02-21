<?php
namespace Acme\Factory;

interface NetworkConnector {
    public function login();
    public function logout();
    public function makePost($message);
}