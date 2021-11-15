<?php
  class Posts extends Controller {
    public function __construct(){

      $this->postModel = $this->model('Post');
      $this->userModel = $this->model('User');
    }

    public function index(){
      // get all Posts
      $posts = $this->postModel->getPosts();
      
      $data = [
        'posts' => $posts
      ];

      // load the view with all Posts
      $this->view('posts/index', $data);
    }
    
    public function add(){

      if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitizing Tests for POST array
        $_POST = filter_input_array(INPUT_POST);
  

        $data = [
          'user_id' => $_SESSION['user_id'],
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'source_link' => trim($_POST['source_link']),
          'image' => $_FILES,
          'title_err' => '',
          'body_err' => '',
          'source_link_err' => '',
          'image_err' => '',
        ];

        // validate the data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez ajoutez un titre';
        }
        if(empty($_FILES['image']['tmp_name'])){
          $data['image_err'] = 'Vous devez ajouter une image à votre article';
        }
        if(empty($data['body'])){
          $data['body_err'] = "Ajoutez le contenu de l'article";
        }
        if(empty($data['source_link'])){
          $data['source_link_err'] = 'Ajoutez le lien vers la source de votre article';
        }
        // check if `http and/or www` is provided
        if(isValidURL($data['source_link'])) {
          $data['source_link_err'] = "";
        } else {
          $data['source_link_err'] = "L'adresse url n'est pas correct. Veuillez réessayer à nouveau.";
        }
        

        if(!empty($_FILES['image']['tmp_name'])) {
            
          // get files data
          $file = $_FILES['image'];
          $fileTmpPath = $_FILES['image']['tmp_name'];
          $fileName = $_FILES['image']['name'];
          $fileSize = $_FILES['image']['size'];
          $fileType = $_FILES['image']['type'];
          $fileError = $_FILES['image']['error'];

          
          // get files extension
          $tempExtension = explode(".", $fileName);
          $fileExtension = strtolower(end($tempExtension));

          $isAllowed = array('jpg', 'png', 'jpeg');
            
          // build & move uploaded file & data
          if(in_array($fileExtension, $isAllowed)) 
          {
            if($fileError === 0) 
            {
              if($fileSize < 3000000) 
              {
                $data['image'] = uniqid('', true) . "." . $fileExtension;
    
                $fileDestination = UPLOADS_FOLDER . $data['image'];
                
                move_uploaded_file($fileTmpPath, $fileDestination);
              }
              else 
              {
                $data['image_err'] = 'Désolé le fichier est trop lourd';
              }  
            }
            else 
            {
              $data['image_err'] = 'Il y a eu une erreur. Essayez encore une fois.';
            }
          } 
          else 
          {
            $data['image_err'] = 'Désolé cette extension n\'est pas autorisée';
          }
        }
            
          // make sure there are no errors
          if(
            empty($data['title_err']) && 
            empty($data['body_err']) && 
            empty($data['image_err']) && 
            empty($data['source_link_err']) ) {
            
            
            // var_dump($data);
            // die();
              
            if($this->postModel->addPost($data)){
              flash('post_message', 'Votre article a bien été ajouté et publié');
              redirect('posts/list');
            } else {
              die('Something went wrong');
            }
          } else {
            //Load The View With Errors
            $this->view('posts/add', $data);
          }
        } else {
          $data = [
            'title' => '',
            'body' => '',
            'source_link' => '',
            'image' => '',
            'title_err' => '',
            'body_err' => '',
            'source_link_err' => '',
            'image_err' => '',
          ];
          // Load The View Add Post
          $this->view('posts/add', $data);        
      }
    }  
        
          
    public function show($id){
      $post = $this->postModel->getPostById($id);
      $user = $this->userModel->getUserById($post->user_id);

      $data = [
        'post' => $post,
        'user' => $user
      ];
      
      // Load The View Show A Post
      $this->view('posts/show', $data);
    }
    
    public function list(){
      if(!isLoggedIn()){
        redirect('users/login');
      }
      // Get All Posts
      $posts = $this->postModel->getPosts();
      
      $data = [
        'title' => 'Liste des articles',
        'description' => "Vous trouverez ici la liste de tout vos articles...",
        'posts' => $posts
      ];
      // var_dump($data);
      // die();
      // Load The View Posts List
      $this->view('posts/list', $data);
    }
    
    public function edit($id) {
      if(!isLoggedIn()){
        redirect('users/login');
      }
      
      $post = $this->postModel->getPostById($id);
      
      $data = [
        'post' => $post,
        'title_err' => '',
        'body_err' => '',      
        'source_link_err' => '',
        'image_err' => '',
      ];


      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitizing Tests for POST array
        $_POST = filter_input_array(INPUT_POST);

        $data = [
          'id' => $id,
          'post' => $post,
          'user_id' => $_SESSION['user_id'],
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'source_link' => trim($_POST['source_link']),
          'image' => $_FILES, 
          'title_err' => '',
          'body_err' => '',          
          'image_err' => '',
          'source_link_err' => '',
        ];


        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez ajoutez un titre';
        }
        if($_FILES['image']['size'] === 0 && empty($data['post']->image) ){
          $data['image_err'] = 'Vous devez ajouter une image à votre article';
        }
        if(empty($data['body'])){
          $data['body_err'] = "Ajoutez le contenu de l'article";
        }
        if(empty($data['source_link'])){
          $data['source_link_err'] = 'Ajoutez le lien vers la source de votre article';
        }
        
        // check if `http and/or www` is provided
        if(isValidURL($data['source_link'])) {
          $data['source_link_err'] = "";
        } else {
          $data['source_link_err'] = "L'adresse url n'est pas correct. Veuillez réessayer à nouveau.";
        }

        // Avoid Useless Request
        if(
          $data['title'] == $this->postModel->getPostById($id)->post_title && 
          $data['source_link'] == $this->postModel->getPostById($id)->post_source_link && 
          $data['image'] == $this->postModel->getPostById($id)->post_image && 
          $data['body'] == $this->postModel->getPostById($id)->post_body) 
        {

          $data['title_err'] = "Vous devez au moins changer un des éléments suivants: titre, image, texte, lien.";
        }
        

        if(($_FILES['image']['size'] > 0)) {
          
          // get files data
          $file = $_FILES['image']; 
          $fileTmpPath = $_FILES['image']['tmp_name'];
          $fileName = $_FILES['image']['name'];
          $fileSize = $_FILES['image']['size'];
          $fileError = $_FILES['image']['error'];
  
          // get file extension
          $tempExtension = explode(".", $fileName);
          $fileExtension = strtolower(end($tempExtension));

          $isAllowed = array('jpg', 'png', 'jpeg');
  
          // build and move file & data
          if(in_array($fileExtension, $isAllowed)) {
            if($fileError === 0) {
              if($fileSize < 3000000) {
                $data['image'] = uniqid('', true) . "." . $fileExtension;
                
                $fileDestination = UPLOADS_FOLDER . $data['image'];
                
                move_uploaded_file($fileTmpPath, $fileDestination);
              }
              else {
                $data['image_err'] = 'Désolé le fichier est trop lourd';
              }  
            }
            else {
              $data['image_err'] = 'Il y a eu une erreur. Essayez encore une fois.';
            }
          } 
          else {
              $data['image_err'] = 'Désolé cette extension n\'est pas autorisée';
          }
        } else {
          $data['image'] = $data['post']->post_image;
        }
        
        
        

        // Make Sure There are no errors
        if(
          empty($data['title_err']) && 
          empty($data['body_err']) && 
          empty($data['image_err']) && 
          empty($data['source_link_err']) ) {
          
          
          
          if($this->postModel->updatePost($data)){
            if($_FILES['image']['size'] > 0 && $_FILES['image']['error'] === 0) {
              
              $previous_image = UPLOADS_FOLDER . $data['post']->post_image;
                unlink($previous_image);
            }
              
              

            flash('post_message', 'L\'article a bien été mis à jour');
            redirect("posts/list");
          } else {
            die('Something went wrong');
          }
        } else {
          // Load View With Errors
          $this->view('posts/edit', $data);
        }
      } else {

        // Load the View Edit A Post
        $this->view('posts/edit', $data);
      }
    }

    public function delete($id) {
      if(!isLoggedIn()){
        redirect('users/login');
      }
         
      $post = $this->postModel->getPostById($id);

      // review the data set entirely
      $data = [
        'post' => $post,
        'source_link' => '',
        'title_err' => '',
        'body_err' => '',
        'image_err' => '',
        ];
      
      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($this->postModel->deletePost($id)) {
          if(!empty($data['post']->post_image)) {
            $previous_image = UPLOADS_FOLDER . $data['post']->post_image;
            
            unlink($previous_image);
          }
          flash('post_message', 'L\'article a bien été supprimé');
          redirect("posts/list");
        } else {
          die('Something went wrong');
        }
      }
    }
  }
        