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

      return $results;
  }

  public function addProspect($data){
    $this->db->query('INSERT INTO prospects (prospect_name, prospect_email, prospect_phone, prospect_address_nr, prospect_address_str, prospect_postal_code, prospect_city, had_free_course, prospect_is_customer ) VALUES(:name, :email, :phone, :address_nr, :address_str, :postal_code, :city, :had_free_course, :is_customer)');
    // Bind values
    $this->db->bind(':name', $data['prospect_name']);
    $this->db->bind(':email', $data['prospect_email']);
    $this->db->bind(':phone', $data['prospect_phone']);
    $this->db->bind(':address_nr', $data['prospect_address_nr']);
    $this->db->bind(':address_str', $data['prospect_address_str']);
    $this->db->bind(':postal_code', $data['prospect_postal_code']);
    $this->db->bind(':city', $data['prospect_city']);
    $this->db->bind(':is_customer', $data['prospect_is_customer']);
    $this->db->bind(':had_free_course', $data['had_free_course']);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

  public function updateProspect($data){
    $this->db->query('UPDATE prospects SET prospect_name = :name, prospect_email = :email, prospect_phone = :phone, prospect_address_str = :address_str, prospect_address_nr = :address_nr, prospect_postal_code = :postal_code, prospect_city = :city WHERE prospect_id = :id');
    // Bind values
    $this->db->bind(':id', $data['prospect_id']);
    $this->db->bind(':name', $data['prospect_name']);
    $this->db->bind(':email', $data['prospect_email']);
    $this->db->bind(':phone', $data['prospect_phone']);
    $this->db->bind(':address_nr', $data['prospect_address_nr']);
    $this->db->bind(':address_str', $data['prospect_address_str']);
    $this->db->bind(':postal_code', $data['prospect_postal_code']);
    $this->db->bind(':city', $data['prospect_city']);


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