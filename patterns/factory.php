<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "vendor/autoload.php";

use Acme\Factory\FacebookPoster;
use Acme\Factory\TwitterPoster;

function postInFacebook($login, $password, $message) {
    $fb = new FacebookPoster($login, $password);
    $fb->post($message);
}

function postInTwitter($login, $password, $message) {
    $fb = new TwitterPoster($login, $password);
    $fb->post($message);
}

postInFacebook("Ivan", "2452fvt87", "Awesome post");
echo "<br>";
postInTwitter("Alex", "2452,5ufvt87", "Awesome twit");