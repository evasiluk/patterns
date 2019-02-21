<?php
require "vendor/autoload.php";

use Acme\Template\ParserPDF;
use Acme\Template\ParserXLSX;

function parseFile($parser) {
	$parser->run();
}

parseFile(new ParserXLSX());