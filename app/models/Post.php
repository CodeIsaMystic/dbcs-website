<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getPosts(){
      $this->db->query('SELECT *,
                              posts.post_id as postId,
                              users.user_id as userId,
                              posts.post_created_at as postCreated,
                              users.user_created_at as userCreated
                              FROM posts
                              INNER JOIN users
                              ON posts.user_id = users.user_id
                              ORDER BY posts.post_created_at DESC
                              ');

      $results = $this->db->resultSet();

      // var_dump($results);
      // die();

      return $results;
    }

    public function addPost($data){
      $this->db->query('INSERT INTO posts (post_title, user_id, post_body, post_source_link, post_image) VALUES(:title, :user_id, :body, :source_link, :image)');
      // Bind values
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':source_link', $data['source_link']);
      $this->db->bind(':image', $data['image']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updatePost($data){
      $this->db->query('UPDATE posts SET post_title = :title, post_body = :body, post_source_link = :source_link, post_image = :image WHERE post_id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':source_link', $data['source_link']);
      $this->db->bind(':image', $data['image']);


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getPostById($id){
      $this->db->query('SELECT * FROM posts WHERE post_id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function deletePost($id){
      $this->db->query('DELETE FROM posts WHERE post_id = :id');
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