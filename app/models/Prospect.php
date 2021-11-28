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
    $this->db->query('INSERT INTO prospects (prospect_name, prospect_email, prospect_phone, prospect_address_nr, prospect_address_str, prospect_postal_code, prospect_city, free_course,  ask_free_course, is_customer ) VALUES(:name, :email, :phone, :address_nr, :address_str, :postal_code, :city, :free_course, :ask_free_course, :is_customer)');
    // Bind values
    $this->db->bind(':name', $data['prospect_name']);
    $this->db->bind(':email', $data['prospect_email']);
    $this->db->bind(':phone', $data['prospect_phone']);
    $this->db->bind(':address_nr', $data['prospect_address_nr']);
    $this->db->bind(':address_str', $data['prospect_address_str']);
    $this->db->bind(':postal_code', $data['prospect_postal_code']);
    $this->db->bind(':city', $data['prospect_city']);
    $this->db->bind(':is_customer', $data['is_customer']);
    $this->db->bind(':free_course', $data['free_course']);
    $this->db->bind(':ask_free_course', $data['ask_free_course']);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

  public function updateProspect($data){
    $this->db->query('UPDATE prospects SET prospect_name = :name, prospect_email = :email, prospect_phone = :phone, prospect_address_str = :address_str, prospect_address_nr = :address_nr, prospect_postal_code = :postal_code, prospect_city = :city, is_customer = :is_customer, ask_free_course = :ask_free_course, free_course = :free_course WHERE prospect_id = :id');
    // Bind values
    $this->db->bind(':id', $data['prospect_id']);
    $this->db->bind(':name', $data['prospect_name']);
    $this->db->bind(':email', $data['prospect_email']);
    $this->db->bind(':phone', $data['prospect_phone']);
    $this->db->bind(':address_nr', $data['prospect_address_nr']);
    $this->db->bind(':address_str', $data['prospect_address_str']);
    $this->db->bind(':postal_code', $data['prospect_postal_code']);
    $this->db->bind(':city', $data['prospect_city']);
    $this->db->bind(':is_customer', $data['is_customer']);
    $this->db->bind(':free_course', $data['free_course']);
    $this->db->bind(':ask_free_course', $data['ask_free_course']);


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

  public function getProspectByEmail($email) {
    $this->db->query('SELECT * FROM prospects WHERE prospect_email = :email');
    // Bind value
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    // Check row
    if($this->db->rowCount() > 0){
      return true;
    } else {
      return false;
    }
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