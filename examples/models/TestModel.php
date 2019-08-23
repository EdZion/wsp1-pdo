<?php
class TestModel
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll($table) {
        return $this->db->query('SELECT * FROM ' . $table);
    }
}