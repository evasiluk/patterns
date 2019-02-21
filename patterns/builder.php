<?php
require "vendor/autoload.php";

use Acme\Builder\MysqlBuilder;

$builder = new MysqlBuilder();

$sql = $builder->select("posts", ["title", "body"])
    ->where("age", "18", ">")
    ->where("theme", "action")
    ->order("views", "asc")
    ->getSQL();

echo $sql;