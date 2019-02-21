<?php
namespace Acme\Strategy;

interface Notify
{
    public function send(User $user);
}