<?php

class IndexManager extends RepositoryFactory
{
    protected $db;
    public function getEvents(){
        $query = "SELECT * FROM events";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        
        return $stmt;
    }
}
