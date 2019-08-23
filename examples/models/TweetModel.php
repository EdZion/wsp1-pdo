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

    public function get($table, $id) {
        $stmt = $this->db->prepare('SELECT * FROM ' . $table . ' WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // now date("Y-m-d H:i:s")
}