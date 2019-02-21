<?php
namespace Acme\Strategy;

class EmailNotify implements Notify
{
    public function send(User $user)
    {
        print_r("Send notify via email $user->email");
    }
}