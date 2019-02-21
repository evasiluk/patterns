<?php
namespace Acme\Builder;

class MysqlBuilder implements SqlBuilder {
    private $query;

    public function __construct() {
        $this->query = new \stdClass();
    }

    public function select($table, Array $fields) {
        $this->query->base = "SELECT " . ((sizeof($fields))? implode(", ", $fields ) : "*") . " FROM " . $table;
        return $this;
    }

    public function where($field, $value, $operator = "=") {
        $this->query->where[] = "$field $operator '$value'";
        return $this;
    }

    public function order($field, $order = "desc") {
        $this->query->order = " ORDER BY " . $field . " " . $order;
        return $this;
    }

    public function getSQL() {
        $sql = "";
        $sql .= $this->query->base;

        if($this->query->where) {
            $sql .= " WHERE " . implode(" AND ", $this->query->where);
        }

        if($this->query->order) {
            $sql .= $this->query->order;
        }

        return $sql;
    }
}