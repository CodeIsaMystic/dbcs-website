<?php

  class Prospects extends Controller {
    public function __construct(){

      $this->prospectModel = $this->model('Prospect');
    }

    public function index(){
      // get all Prospects
      $prospects = $this->prospectModel->getProspects();
      
      $data = [
        'prospects' => $prospects
      ];
      
      // load the view with all Posts
      // $this->view('prospects/index', $data);
    }
    
    public function show($id){
      $prospect = $this->prospectModel->getProspectById($id);

      $data = [
        'prospect' => $prospect
      ];
      
      // Load The View Show A Post
      $this->view('prospects/show', $data);
    }
    
    public function list(){
      if(!isLoggedIn()){
        redirect('users/login');
      }
      // Get All Prospects
      $prospects = $this->prospectModel->getProspects();
      
      $data = [
        'title' => 'Liste de vos prospects',
        'description' => "Vous trouverez ici tout vos contacts potentiellement clients.",
        'prospects' => $prospects
      ];
      // var_dump($data);
      // die();
      // Load The View Posts List
      $this->view('prospects/list', $data);
    }
  }

?>