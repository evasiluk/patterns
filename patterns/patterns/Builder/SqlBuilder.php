<?php
namespace Acme\Builder;

interface SqlBuilder {
    public function select($table, Array $fields);
    public function where($field, $value, $operator = "=");
    public function order($field, $order = "desc");

    public function getSQL();
}