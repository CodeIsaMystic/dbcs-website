<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function register($data){
      $this->db->query('INSERT INTO users (user_name, user_email, user_password) VALUES(:name, :email, :password)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function login($email, $password){
      $this->db->query('SELECT * FROM users WHERE user_email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->user_password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM users WHERE user_email = :email');
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

    public function getUserById($id){
      $this->db->query('SELECT * FROM users WHERE user_id = :id');
      // Bind value
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }