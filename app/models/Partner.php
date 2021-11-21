<?php
class Partner {
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getPartners() {
    $this->db->query('SELECT * FROM partners ORDER BY partners.partner_created_at DESC');

    $results = $this->db->resultSet();

    // var_dump($results);
    // die();

    return $results;
  }

  public function addPartner($data) {
    $this->db->query('INSERT INTO partners (partner_company_name, partner_email) VALUES (:company_name, :email)');

    // Bind values
    $this->db->bind(':company_name', $data['partner_company_name']);
    $this->db->bind(':email', $data['partner_email']);

    //execute
    if($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function getPartnerById($id){
    $this->db->query('SELECT * FROM partners WHERE partner_id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  public function updatePartner($data){
    $this->db->query('UPDATE partners SET partner_company_name = :company_name, partner_email = :email WHERE partner_id = :id');
    // Bind values
    $this->db->bind(':id', $data['partner_id']);
    $this->db->bind(':company_name', $data['partner_company_name']);
    $this->db->bind(':email', $data['partner_email']);


    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

  public function deletePartner($id){
    $this->db->query('DELETE FROM partners WHERE partner_id = :id');
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