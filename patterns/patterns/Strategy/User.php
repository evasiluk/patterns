<?php
namespace Acme\Strategy;

class User
{
    public $email = "";
    public $phone = "";

    public function __construct($email, $phone)
    {
        $this->email = $email;
        $this->phone = $phone;
    }
}