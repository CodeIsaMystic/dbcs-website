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
    redirectToLogin();

    
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
    redirectToLogin();


    $partner = $this->partnerModel->getPartnerById($id);

    $data = [
      'partner' => $partner
    ];
    
    // load the view show a partner card
    $this->view('partners/show', $data);
  }


  public function add() {
    redirectToLogin();


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Sanitizing tests for POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'partner_company_name' => trim($_POST['partner_company_name']),
        'partner_email' => trim($_POST['partner_email']),
        'partner_phone' => trim($_POST['partner_phone']),
        'partner_city' => trim($_POST['partner_city']),
        'type_partnership' => isset($_POST['type_partnership']),
        'have_deal' => isset($_POST['have_deal']),
        'is_web_business' => isset($_POST['is_web_business']),
        'partner_company_name_err' => '',
        'partner_email_err' => '',
        'partner_phone_err' => ''
      ];

      // throw err message if empty 
      if(empty($data['partner_company_name'])) {
        $data['partner_company_name_err'] = 'Veuillez ajoutez le nom du partenaire';
      };
      if(empty($data['partner_email'])) {
        $data['partner_email_err'] = "Veuillez ajoutez l'email du partenaire";
      }

      // throw err message if not valid
      if(!isValidPhone($_POST['partner_phone']))
      {
        $data['partner_phone_err'] =  "Ce numéro de téléphone n'est pas correct.";
      }
      
        
      // handle checkbox input if checked or not
      if(handleCheckboxValue($data['have_deal']) === 0) {
        $data['have_deal'] = 0;
      }
      if(handleCheckboxValue($data['is_web_business']) === 0) {
        $data['is_web_business'] = 0;
      }
      if(isset($data['type_partnership'])) {
        $data['type_partnership'] = $_POST['type_partnership'];
      }


      // make sure there are no errors before submit
      if(
        empty($data['partner_email_err']) && 
        isValidPhone($_POST['partner_phone']) &&  
        empty($data['partner_company_name_err'])
      ) {

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
        'partner_phone' => '',
        'partner_city' => '',
        'type_partnership' => '',
        'is_web_business' => 0,
        'have_deal' => 0,
        'partner_company_name_err' => '',
        'partner_email_err' => '',
        'partner_phone_err' => ''
      ];
      // load the view add partners
      $this->view('partners/add', $data);
    }
  }

  public function edit($id){
    redirectToLogin();

    $partner = $this->partnerModel->getPartnerById($id);

    
    $data = [
      'partner' => $partner,            
      'partner_main_err' => '',
      'partner_company_name_err' => '',
      'partner_email_err' => '',
      'partner_phone_err' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Sanitizing Tests for POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


      $data = [
        'partner_id' => $id,
        'partner' => $partner,
        'partner_company_name' => trim($_POST['partner_company_name']),
        'partner_email' => trim($_POST['partner_email']),
        'partner_phone' => trim($_POST['partner_phone']),
        'partner_city' => trim($_POST['partner_city']),
        'type_partnership' => isset($_POST['type_partnership']),
        'have_deal' => isset($_POST['have_deal']),
        'is_web_business' => isset($_POST['is_web_business']),
        'partner_main_err' => '',
        'partner_company_name_err' => '',
        'partner_email_err' => '',
        'partner_phone_err' => ''
      ];


      // throw err message if data are empty
      if(empty($data['partner_company_name'])){
        $data['partner_company_name_err'] = 'Veuillez ajoutez le nom de l\'entreprise';
      }
      if(empty($data['partner_email'])){
        $data['partner_email_err'] = "Veuillez ajoutez l'email";
      }
      // throw err message if phone is not valid
      if(!isValidPhone($_POST['partner_phone']) && !empty($_POST['partner_phone']))
      {
        $data['partner_phone_err'] =  "Ce numéro de téléphone n'est pas correct.";
      } 

      
        if(handleCheckboxValue($data['have_deal']) === 0) {
          $data['have_deal'] = 0;
        }
        if(handleCheckboxValue($data['is_web_business']) === 0) {
          $data['is_web_business'] = 0;
        }
        if(isset($data['type_partnership'])) {
          $data['type_partnership'] = $_POST['type_partnership'];
        }

      // avoid useless request
      if(
        ($data['partner_company_name'] == $this->partnerModel->getPartnerById($id)->partner_company_name) && 
        ($data['partner_email'] == $this->partnerModel->getPartnerById($id)->partner_email) && 
        ($data['partner_phone'] == $this->partnerModel->getPartnerById($id)->partner_phone) &&
        ($data['partner_city'] == $this->partnerModel->getPartnerById($id)->partner_city) &&
        ($data['have_deal'] == $this->partnerModel->getPartnerById($id)->have_deal) &&
        ($data['is_web_business'] == $this->partnerModel->getPartnerById($id)->is_web_business) &&
        ($data['type_partnership'] == $this->partnerModel->getPartnerById($id)->type_partnership) 
      ) {

        $data['partner_main_err'] = "Vous devez au moins changer un des éléments suivants: nom, email, téléphone, ville...";
      }

      // make sure there are no errors before to submit
      if(
        (empty($data['partner_main_err'])) && 
        (isValidPhone($_POST['partner_phone'])) && 
        (empty($data['partner_company_name_err'])) && 
        (empty($data['partner_email_err']))
      ) {
          
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
    redirectToLogin();

        
    $partner = $this->partnerModel->getPartnerById($id);

    // review the data set entirely
    // remove err fields !!!??
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

?>