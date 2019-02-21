<?php
interface sqlGenerator {
    public function select($table, array $fields);
    public function where($field, $value, $operator = '=');
    public function limit($start, $offcet);

    public function getSQL();
}

class mysqlGenerator implements sqlGenerator {
    protected $query;

    protected function reset()
    {
        $this->query = new \stdClass();
    }

    public function select($table, array $fields) {
        $this->reset();
        $this->query->base = "SELECT ".implode(", ", $fields) . " FROM " . $table;
        return $this;
    }

    public function where($field, $value, $operator = '=') {
        $this->query->where[] = "$field $operator '$value'";
        return $this;
    }

    public function limit($start, $offcet) {
        $this->query->limit = " LIMIT $start, $offcet";
        return $this;
    }

    public function getSQL() {
        $query = $this->query;
        $sql = $query->base;

        if(!empty($query->where)) {
            $sql .= " WHERE " . implode(" AND ", $query->where);
        }

        if($query->limit) {
            $sql .= $query->limit;
        }

        $sql .= ";";

        return $sql;
    }
}