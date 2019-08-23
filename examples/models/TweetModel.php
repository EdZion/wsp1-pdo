<?php
class TweetModel
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll($table) {
        return $this->db->query('SELECT * FROM ' . $table);
    }


    // now date("Y-m-d H:i:s")
}