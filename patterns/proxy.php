<?php
require "vendor/autoload.php";

use Acme\Proxy\CachedDownloader;
use Acme\Proxy\SimpleDownloader;

function multipleDownload($downloader) {
    $downloader->download("https://google.com");
    $downloader->download("https://google.com");
    $downloader->download("https://google.com");
}

$simpleDownloader = new SimpleDownloader();
$downloader = new CachedDownloader($simpleDownloader);

multipleDownload($downloader);