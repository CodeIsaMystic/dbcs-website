<?php 


class Pages extends Controller {
  public function __construct() {
      $this->postModel = $this->model('Post');
      $this->prospectModel = $this->model('Prospect');
      $this->partnerModel = $this->model('Partner');
  }

  public function index() {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $prospect = $this->prospectModel;
      
      // Sanitizing Tests for POST array
      $_POST = filter_input_array(INPUT_POST);

      
      $data = [
        'title' => 'Aimez le sport par le coaching!',
        'description' => 
        'Nous vous aidons à construire votre santé. Nous soutenons vos
        objectifs. Nous prenons en compte vos contraintes et difficultés -
        365 jours / 365, nous travaillerons ensemble à vous rendre
        meilleur jour après jour.',
        'prospect_name' => trim($_POST['prospect_name']),
        'prospect_email' => trim($_POST['prospect_email']),
        'prospect_name_err' => '',
        'prospect_email_err' => '',
      ];
      
      // validate the data
      if(empty($data['prospect_name'])){
        $data['prospect_name_err'] = 'Veuillez ajoutez le nom du prospect';
      }
      if(empty($data['prospect_email'])){
        $data['prospect_email_err'] = "Ajoutez l'email du prospect";
      }
          
      // make sure there are no errors
      if(
        empty($data['prospect_name_err']) && 
        empty($data['prospect_email_err'])) {
          
        if($this->prospectModel->addProspect($data)){
          flash('prospect_client_message', 'Merci de votre confiance, nous vous contacterons au plus vite');
          redirect('pages/index');
        } else {
          die('There was an error');
        }
      } else {
        // load the view with errors
        $this->view('pages/index', $data);
      }
    } else {
      $data = [
        'title' => 'Aimez le sport par le coaching!',
        'description' => 
        'Nous vous aidons à construire votre santé. Nous soutenons vos
        objectifs. Nous prenons en compte vos contraintes et difficultés -
        365 jours / 365, nous travaillerons ensemble à vous rendre
        meilleur jour après jour.',
        'prospect_name' => '',
        'prospect_email' => '',
        'prospect_name_err' => '',
        'prospect_email_err' => '',
      ];
      // load the view add prospect
      $this->view('pages/index', $data);        
    }
    
  }
  
  public function blog() {
    $posts = $this->postModel->getPosts();
  
    $data = [
      'title' => 'Bienvenue dans notre blog',
      'description' => "Nous vous partageons de temps à autre quelques articles de blog pour vous donner
      accès à plus d'informations.",
      'posts' => $posts
    ];
    $this->view('pages/blog', $data);
  }

  public function contact() {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $partner = $this->partnerModel;
      
      // Sanitizing Tests for POST array
      $_POST = filter_input_array(INPUT_POST);

      
      $data = [
        'title' => 'Vous voulez garder le contact?',
        'description' => "Nous vous aidons à construire votre santé. Nous soutenons vos objectifs. Nous prenons en compte vos contraintes et difficultés.",
        'partner_company_name' => trim($_POST['partner_company_name']),
        'partner_email' => trim($_POST['partner_email']),
        'partner_company_name_err' => '',
        'partner_email_err' => '',
      ];
      
      // validate the data
      if(empty($data['partner_company_name'])){
        $data['partner_company_name_err'] = 'Veuillez ajouter votre nom d\'entreprise';
      }
      if(empty($data['partner_email'])){
        $data['partner_email_err'] = "Veuillez ajouter votre email";
      }
          
      // make sure there are no errors
      if(
        empty($data['partner_company_name_err']) && 
        empty($data['partner_email_err'])) {
          
        if($this->partnerModel->addPartner($data)){
          flash('partner_client_message', 'Merci de votre confiance, nous vous contacterons au plus vite');
          redirect('pages/contact');
        } else {
          die('There was an error');
        }
      } else {
        // load the view with errors
      $this->view('pages/contact', $data);
      }
    } else {
      $data = [
        'title' => 'Vous voulez garder le contact?',
        'description' => "Nous vous aidons à construire votre santé. Nous soutenons vos objectifs. Nous prenons en compte vos contraintes et difficultés.",
        'partner_company_name' => '',
        'partner_email' => '',
        'partner_company_name_err' => '',
        'partner_email_err' => '',
      ];
      // load the view add partner
      $this->view('pages/contact', $data);      
    }
  }

  public function coaching() {
    
      $data = [
        'title' => 'Tout les détails pour commencer votre coaching',
        'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
    ];
    $this->view('pages/coaching', $data);
  }

          
  

}