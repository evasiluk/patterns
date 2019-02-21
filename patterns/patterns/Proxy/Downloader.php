<?php
namespace Acme\Proxy;

interface Downloader {
    public function download($url);
}