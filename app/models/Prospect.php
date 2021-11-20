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

  public function addProspect($data){
    $this->db->query('INSERT INTO prospects (prospect_name, prospect_email) VALUES(:name, :email)');
    // Bind values
    $this->db->bind(':name', $data['prospect_name']);
    $this->db->bind(':email', $data['prospect_email']);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

  public function updateProspect($data){
    $this->db->query('UPDATE prospects SET prospect_name = :name, prospect_email = :email WHERE prospect_id = :id');
    // Bind values
    $this->db->bind(':id', $data['prospect_id']);
    $this->db->bind(':name', $data['prospect_name']);
    $this->db->bind(':email', $data['prospect_email']);


    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

  
  public function getProspectById($id){
    $this->db->query('SELECT * FROM prospects WHERE prospect_id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  public function deleteProspect($id){
      $this->db->query('DELETE FROM prospects WHERE prospect_id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

  
}