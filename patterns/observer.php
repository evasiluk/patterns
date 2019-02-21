<?php
require "vendor/autoload.php";

use Acme\Observer\Subject;
use Acme\Observer\Observer;

$user_1 = new Observer("news@user.com");
$user_2 = new Observer("actions@user.com");
$user_3 = new Observer("all@user.com");

$feed = new Subject();
$feed->attach($user_1, "news");
$feed->attach($user_2, "action");
$feed->attach($user_3);

$feed->news("new #1");
$feed->action("action #1");

$feed->detach($user_3);
$feed->action("action #2");