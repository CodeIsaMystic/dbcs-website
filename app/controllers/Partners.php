<?php
class Partners extends Controller {
  public function __construct() {

    $this->partnerModel = $this->model('Partner');

  }

  public function index() {
    // get all partners
    $partners = $this->partnerModel->getPartners();

    $data = [
      'partners' => $partners
    ];

    // load the view with all Partners
    // $this->view('partners/index', $data);
  }

  public function list() {
    if(!isLoggedIn()){
        redirect('users/login');
      }

    // get all partners
    $partners = $this->partnerModel->getPartners();

    $data = [
      'title' => 'Liste de vos partenaires',
      'description' => "Vous trouverez ici tout les partenaires avec qui vous êtes en contact.",
      'partners' => $partners
    ];

    // load the view with all Partners
    $this->view('partners/list', $data);
  }

  public function show($id){
    $partner = $this->partnerModel->getPartnerById($id);

    $data = [
      'partner' => $partner
    ];
    
    // load the view show a partner card
    $this->view('partners/show', $data);
  }


  public function add() {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitizing tests for POST array
      $_POST = filter_input_array(INPUT_POST);

      $data = [
        'partner_company_name' => trim($_POST['partner_company_name']),
        'partner_email' => trim($_POST['partner_email']),
        'partner_phone' => trim($_POST['partner_phone']),
        'partner_city' => trim($_POST['partner_city']),
        'date_started_partnership' => $_POST['date_started_partneship'],
        'type_partnership' => $_POST['type_partnership'],
        'have_deal' => 0,
        'is_web_business' => 0,
        'partner_company_name_err' => '',
        'partner_email_err' => ''
      ];

      // validate the data 
      if(empty($data['partner_company_name'])) {
        $data['partner_company_name_err'] = 'Veuillez ajoutez le nom du partenaire';
      };
      if(empty($data['partner_email'])) {
        $data['partner_email_err'] = "Veuillez ajoutez l'email du partenaire";
      }

      // make sure there are no errors before submit
      if(empty($data['partner_email_err']) && empty($data['partner_company_name_err'])) {

        if($this->partnerModel->addPartner($data)) {
          flash('partner_message', 'Votre partenaire a bien été ajouté à la liste.');
          redirect('partners/list');
        } else {
          die('There was an error');
        }
      } else {
        // load the view with errors
        $this->view('partners/add', $data);
      }
    } else {
      $data = [
        'partner_company_name' => '',
        'partner_email' => '',
        'partner_phone' => null,
        'partner_city' => null,
        'is_web_business' => null,
        'type_partnership' => null,
        'have_deal' => 0,
        'date_started_partnership' => null,
        'partner_company_name_err' => '',
        'partner_email_err' => ''
      ];
      // load the view add partners
      $this->view('partners/add', $data);
    }
  }

  public function edit($id){
    if(!isLoggedIn()){
      redirect('users/login');
    }

    $partner = $this->partnerModel->getPartnerById($id);

    
    $data = [
      'partner' => $partner,            
      'partner_company_name_err' => '',
      'partner_email_err' => '',
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Sanitizing Tests for POST array
      $_POST = filter_input_array(INPUT_POST);


      $data = [
        'partner_id' => $id,
        'partner' => $partner,
        'partner_company_name' => trim($_POST['partner_company_name']),
        'partner_email' => trim($_POST['partner_email']),
        'partner_phone' => trim($_POST['partner_phone']),
        'partner_city' => trim($_POST['partner_city']),
        'date_started_partnership' => $_POST['date_started_partneship'],
        'type_partnership' => $_POST['type_partnership'],
        'have_deal' => 0,
        'is_web_business' => 0,
        'partner_company_name_err' => '',
        'partner_email_err' => ''
      ];

      // validate the data
      if(empty($data['partner_company_name'])){
        $data['partner_company_name_err'] = 'Veuillez ajoutez le nom de l\'entreprise';
      }
      if(empty($data['partner_email'])){
        $data['partner_email_err'] = "Veuillez ajoutez l'email";
      }

      // avoid useless request
      if(($data['partner_company_name'] == $this->partnerModel->getPartnerById($id)->partner_company_name)&&($data['partner_email'] == $this->partnerModel->getPartnerById($id)->partner_email)) {
        $data['partner_company_name_err'] = "Vous devez au moins changer un des éléments suivants: nom, email...";
      }

      // make sure there are no errors
      if((empty($data['partner_company_name_err'])) && (empty($data['partner_email_err']))) {
          
        if($this->partnerModel->updatePartner($data)){
          flash('partner_message', 'Votre partenaire a bien été modifié et enregistré.');
          redirect('partners/list');
        } else {
          die('There was an error');
        }
      } else {
        // load the view with errors
        $this->view('partners/edit', $data);
      }
    } else {

      // load the view partner edit
      $this->view('partners/edit', $data);        
    }
  }
  
  public function delete($id) {
  if(!isLoggedIn()){
    redirect('users/login');
  }
      
  $partner = $this->partnerModel->getPartnerById($id);

  // review the data set entirely
  $data = [
    'partner' => $partner,           
    'partner_company_name_err' => '',
    'partner_email_err' => '',
    ];
  
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Sanitize POST array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($this->partnerModel->deletePartner($id)) {
      
      flash('partner_message', 'La fiche partenaire a bien été supprimé');
      redirect("partners/list");
    } else {
      die('There was an error');
    }
  }
}

}