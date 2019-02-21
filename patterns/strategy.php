<?php
require "vendor/autoload.php";

use Acme\Strategy\EmailNotify;
use Acme\Strategy\SmsNotify;
use Acme\Strategy\User;

$user = new User("user@email.com", "+375291122333");

$notifier = new EmailNotify();
$notifier->send($user);

$notifier = new SmsNotify();
$notifier->send($user);