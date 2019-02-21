<?php
require "vendor/autoload.php";

use Acme\Adapter\BookInterface;
use Acme\Adapter\Book;
use Acme\Adapter\Kindle;
use Acme\Adapter\KindleAdapter;

function read(BookInterface $book) {
    $book->open();
    $book->turnPage();
}

read(new Book());

read(new KindleAdapter(new Kindle()));