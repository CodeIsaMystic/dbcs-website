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
        
    public function add(){

      if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitizing Tests for POST array
        $_POST = filter_input_array(INPUT_POST);
  

        $data = [
          'prospect_name' => trim($_POST['prospect_name']),
          'prospect_email' => trim($_POST['prospect_email']),
          'prospect_name_err' => '',
          'prospect_email_err' => '',
        ];

        // validate the data
        if(empty($data['prospect_name'])){
          $data['prospect_name_err'] = 'Veuillez ajoutez votre nom';
        }
        if(empty($data['prospect_email'])){
          $data['prospect_email_err'] = "Ajoutez votre Email";
        }
           
        // make sure there are no errors
        if(
          empty($data['prospect_name_err']) && 
          empty($data['prospect_email_err'])) {
          
          
          // var_dump($data);
          // die();
            
          if($this->prospectModel->addProspect($data)){
            flash('prospect_message', 'Votre prospect a bien été ajouté et enregistré.');
            redirect('prospects/list');
          } else {
            die('Something went wrong');
          }
        } else {
          //Load The View With Errors
          $this->view('prospects/add', $data);
        }
      } else {
        $data = [
          'prospect_name' => '',
          'prospect_email' => '',
          'prospect_name_err' => '',
          'prospect_email_err' => '',
        ];
        // Load The View Add Post
        $this->view('prospects/add', $data);        
      }
    }  
   
    public function edit($id){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $prospect = $this->prospectModel->getProspectById($id);

      
      $data = [
        'prospect' => $prospect,            
        'prospect_name_err' => '',
        'prospect_email_err' => '',
      ];

      if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitizing Tests for POST array
        $_POST = filter_input_array(INPUT_POST);
  

        $data = [
          'prospect_id' => $id,
          'prospect' => $prospect,
          'prospect_name' => trim($_POST['prospect_name']),
          'prospect_email' => trim($_POST['prospect_email']),
          'prospect_name_err' => '',
          'prospect_email_err' => ''
        ];

        // validate the data
        if(empty($data['prospect_name'])){
          $data['prospect_name_err'] = 'Veuillez ajoutez le nom du prospect';
        }
        if(empty($data['prospect_email'])){
          $data['prospect_email_err'] = "Veuillez ajoutez l'email du prospect";
        }

        // Avoid Useless Request
        if(($data['prospect_name'] == $this->prospectModel->getProspectById($id)->prospect_name)&&($data['prospect_email'] == $this->prospectModel->getProspectById($id)->prospect_email)) {
          $data['prospect_name_err'] = "Vous devez au moins changer un des éléments suivants: nom, email...";
        }

        // make sure there are no errors
        if((empty($data['prospect_name_err'])) && (empty($data['prospect_email_err']))) {
          
          
          // var_dump($data);
          // die();
            
          if($this->prospectModel->updateProspect($data)){
            flash('prospect_message', 'Votre prospect a bien été modifié et enregistré.');
            redirect('prospects/list');
          } else {
            die('Something went wrong');
          }
        } else {
          //Load The View With Errors
          $this->view('prospects/edit', $data);
        }
      } else {

        // Load The View Add Post
        $this->view('prospects/edit', $data);        
      }
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

    public function delete($id) {
      if(!isLoggedIn()){
        redirect('users/login');
      }
         
      $post = $this->prospectModel->getProspectById($id);

      // review the data set entirely
      $data = [
        'prospect' => $prospect,           
        'prospect_name_err' => '',
        'prospect_email_err' => '',
        ];
      
      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($this->prospectModel->deleteProspect($id)) {
          
          flash('prospect_message', 'L\'article a bien été supprimé');
          redirect("prospects/list");
        } else {
          die('Something went wrong');
        }
      }
    }
  }

?>