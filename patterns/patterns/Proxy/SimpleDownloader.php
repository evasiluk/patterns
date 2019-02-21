<?php
namespace Acme\Proxy;

class SimpleDownloader implements Downloader {
    public function download($url)
    {
        echo "Downloading a file from the Internet. <br>";
        $data = file_get_contents($url);
        echo "Downloaded bytes: " . strlen($data) . "<br>";

        return $data;
    }
}