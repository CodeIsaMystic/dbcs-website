<?php 
class Prospect {
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getProspects() {
    $this->db->query('SELECT *
                      FROM prospects
                      ORDER BY prospects.prospect_created_at DESC
                      ');

      $results = $this->db->resultSet();

      // var_dump($results);
      // die();

      return $results;
  }

  
    public function getProspectById($id){
      $this->db->query('SELECT * FROM prospects WHERE prospect_id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

  
}