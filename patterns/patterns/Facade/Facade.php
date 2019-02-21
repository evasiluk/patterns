<?php
namespace Acme\Facade;

class Facade {
    private $audio;
    private $video;

    public function __construct() {
        $this->audio = new Audio();
        $this->video = new Video();
    }

    public function processAVI() {
        $this->video->videoOperation1();
        $this->video->videoOperationN();
        $this->audio->audioOperation1();
        $this->audio->audioOperationN();
    }
}