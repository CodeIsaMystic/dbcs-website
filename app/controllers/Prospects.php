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
      
      // load the view with all Prospects
      // $this->view('prospects/index', $data);
    }

        
    public function list(){
      redirectToLogin();


      // get all prospects
      $prospects = $this->prospectModel->getProspects();
      
      $data = [
        'title' => 'Liste de vos prospects',
        'description' => "Vous trouverez ici tout vos contacts potentiellement clients.",
        'prospects' => $prospects
      ];

      // load the view prospects list
      $this->view('prospects/list', $data);
    
    }
    
    public function show($id){
      redirectToLogin();

      $prospect = $this->prospectModel->getProspectById($id);

      $data = [
        'prospect' => $prospect,
        'prospect_final_address' => '',
      ];

      $data['prospect_final_address'] = addressHandler($data);

      // load the view show a prospect card
      $this->view('prospects/show', $data);
    }
        
    public function add(){
      redirectToLogin();


      if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitizing Tests for POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  

        $data = [
          'prospect_name' => trim($_POST['prospect_name']),
          'prospect_email' => trim($_POST['prospect_email']),
          'prospect_phone' => trim($_POST['prospect_phone']),
          'prospect_address_nr' => trim($_POST['prospect_address_nr']),
          'prospect_address_str' => trim($_POST['prospect_address_str']),
          'prospect_postal_code' => trim($_POST['prospect_postal_code']),
          'prospect_city' => trim($_POST['prospect_city']),
          'prospect_phone_err' => '',
          'prospect_name_err' => '',
          'prospect_email_err' => ''
        ];


        // throw err message if empty
        if(empty($data['prospect_name'])){
          $data['prospect_name_err'] = 'Veuillez ajoutez le nom du prospect';
        }
        if(empty($data['prospect_email'])){
          $data['prospect_email_err'] = "Ajoutez l'email du prospect";
        }
        
        
        // throw err message if not valid
        if(!isValidPhone($_POST['prospect_phone']))
        {
          $data['prospect_phone_err'] =  "Ce numéro de téléphone n'est pas correct.";
        }


        // make sure there are no errors before submit
        if(
          empty($data['prospect_name_err']) &&
          isValidPhone($_POST['prospect_phone']) &&  
          empty($data['prospect_email_err'])
        ) {
            
          if($this->prospectModel->addProspect($data)){
            flash('prospect_message', 'Votre prospect a bien été ajouté et enregistré.');
            redirect('prospects/list');
          } else {
            die('There was an error');
          }
        } else {
          // load the view with errors
          $this->view('prospects/add', $data);
        }
      } else {
        $data = [
          'prospect_name' => '',
          'prospect_email' => '',
          'prospect_phone' => null,
          'prospect_address_nr' => '',
          'prospect_address_str' => '',
          'prospect_postal_code' => '',
          'prospect_city' => '',
          'prospect_name_err' => '',
          'prospect_email_err' => ''
        ];
        // load the view add prospect
        $this->view('prospects/add', $data);        
      }
    }  
   
    public function edit($id){
      redirectToLogin();

      $prospect = $this->prospectModel->getProspectById($id);

      
      $data = [
        'prospect' => $prospect,            
        'prospect_main_err' => '',
        'prospect_name_err' => '',
        'prospect_email_err' => '',
        'prospect_phone_err' => ''
      ];

      if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitizing Tests for POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  

        $data = [
          'prospect_id' => $id,
          'prospect' => $prospect,
          'prospect_name' => trim($_POST['prospect_name']),
          'prospect_email' => trim($_POST['prospect_email']),
          'prospect_phone' => trim($_POST['prospect_phone']),
          'prospect_address_nr' => trim($_POST['prospect_address_nr']),
          'prospect_address_str' => trim($_POST['prospect_address_str']),
          'prospect_postal_code' => trim($_POST['prospect_postal_code']),
          'prospect_city' => trim($_POST['prospect_city']),
          'prospect_main_err' => '',
          'prospect_name_err' => '',
          'prospect_email_err' => '',
          'prospect_phone_err' => ''
        ];

        // throw err message if data are empty
        if(empty($data['prospect_name'])){
          $data['prospect_name_err'] = 'Veuillez ajoutez le nom du prospect';
        }
        if(empty($data['prospect_email'])){
          $data['prospect_email_err'] = "Veuillez ajoutez l'email du prospect";
        }
        // throw err message if phone is not valid
        if(!isValidPhone($_POST['prospect_phone']) && !empty($_POST['prospect_phone']))
        {
          $data['prospect_phone_err'] =  "Ce numéro de téléphone n'est pas correct.";
        } 
        if(empty($_POST['prospect_phone'])) {
          $data['prospect_phone_err'] =  "Ce numéro de téléphone n'est pas correct.";

        }

        // avoid useless request
        if(
          ($data['prospect_name'] == $this->prospectModel->getProspectById($id)->prospect_name) &&
          ($data['prospect_email'] == $this->prospectModel->getProspectById($id)->prospect_email) && 
          ($data['prospect_phone'] == $this->prospectModel->getProspectById($id)->prospect_phone) &&
          ($data['prospect_address_nr'] == $this->prospectModel->getProspectById($id)->prospect_address_nr) &&
          ($data['prospect_address_str'] == $this->prospectModel->getProspectById($id)->prospect_address_str) &&
          ($data['prospect_postal_code'] == $this->prospectModel->getProspectById($id)->prospect_postal_code) &&
          ($data['prospect_city'] == $this->prospectModel->getProspectById($id)->prospect_city)
        ) {
          $data['prospect_main_err'] = "Vous devez au moins changer un des éléments suivants: nom, email, téléphone, adresse...";
        }

        // make sure there are no errors before to submit
        if(
          (empty($data['prospect_main_err'])) && 
          (isValidPhone($_POST['prospect_phone'])) && 
          (empty($data['prospect_name_err'])) && 
          (empty($data['prospect_email_err'])) ) {
            
          if($this->prospectModel->updateProspect($data)){
            flash('prospect_message', 'Votre prospect a bien été modifié et enregistré.');
            redirect('prospects/list');
          } else {
            die('There was an error');
          }
        } else {
          //load the view with errors
          $this->view('prospects/edit', $data);
        }
      } else {

        // load the view edit a prospect
        $this->view('prospects/edit', $data);        
      }
    }  

    public function delete($id) {
      redirectToLogin();

         
      $prospect = $this->prospectModel->getProspectById($id);

      // review the data set entirely
      // remove err fields !!!??
      $data = [
        'prospect' => $prospect,           
        'prospect_name_err' => '',
        'prospect_email_err' => '',
        ];
      
      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($this->prospectModel->deleteProspect($id)) {
          
          flash('prospect_message', 'Le prospect a bien été supprimé');
          redirect("prospects/list");
        } else {
          die('There was an error');
        }
      }
    }
  }

?>