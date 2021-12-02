<?php
class Partner {
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getPartners() {
    $this->db->query('SELECT * FROM partners ORDER BY partners.partner_created_at DESC');

    $results = $this->db->resultSet();

    return $results;
  }

  public function addPartner($data) {
    $this->db->query('INSERT INTO partners (partner_company_name, partner_email, partner_phone, partner_city, is_web_business, have_deal, type_partnership) VALUES (:company_name, :email, :phone, :city, :is_web_business, :have_deal, :type_partnership)');

    // Bind values
    $this->db->bind(':company_name', $data['partner_company_name']);
    $this->db->bind(':email', $data['partner_email']);
    $this->db->bind(':phone', $data['partner_phone']);
    $this->db->bind(':city', $data['partner_city']);
    $this->db->bind(':is_web_business', $data['is_web_business']);
    $this->db->bind(':type_partnership', $data['type_partnership']);
    $this->db->bind(':have_deal', $data['have_deal']);

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

  public function getPartnerByEmail($email){
    $this->db->query('SELECT * FROM partners WHERE partner_email = :email');
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

  public function updatePartner($data){
    $this->db->query('UPDATE partners SET partner_company_name = :company_name, partner_email = :email, partner_phone = :phone, partner_city = :city, is_web_business = :is_web_business, have_deal = :have_deal, type_partnership = :type_partnership WHERE partner_id = :id');
    // Bind values
    $this->db->bind(':id', $data['partner_id']);
    $this->db->bind(':company_name', $data['partner_company_name']);
    $this->db->bind(':email', $data['partner_email']);
    $this->db->bind(':phone', $data['partner_phone']);
    $this->db->bind(':city', $data['partner_city']);
    $this->db->bind(':is_web_business', $data['is_web_business']);
    $this->db->bind(':type_partnership', $data['type_partnership']);
    $this->db->bind(':have_deal', $data['have_deal']);


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