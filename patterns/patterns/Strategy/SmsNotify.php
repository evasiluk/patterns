<?php
namespace Acme\Strategy;

class SmsNotify implements Notify
{
    public function send(User $user)
    {
        print_r("Send notify via SMS $user->phone");
    }
}