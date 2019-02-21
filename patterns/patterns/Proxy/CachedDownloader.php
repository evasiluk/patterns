<?php
namespace Acme\Proxy;

class CachedDownloader implements Downloader {
    private $downloader;
    private $cache;

    public function __construct(Downloader $downloader)
    {
        $this->downloader = $downloader;
    }


    public function download($url)
    {
        if($this->cache[$url]) {
            echo "Retrieving data from cache <br>";
            return $this->cache[$url];
        }
        $data = $this->downloader->download($url);
        $this->cache[$url] = $data;

        return $data;
    }
}
