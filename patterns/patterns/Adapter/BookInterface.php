<?php
namespace Acme\Adapter;

interface BookInterface {
    public function open();
    public function turnPage();
}