<?php
  class Posts extends Controller {
    public function __construct(){

      $this->postModel = $this->model('Post');
      $this->userModel = $this->model('User');
    }

    public function index(){
      // Get All Posts
      $posts = $this->postModel->getPosts();
      
      $data = [
        'posts' => $posts
      ];
      // Load The View With All Posts
      $this->view('posts/index', $data);
    }
    
    public function add(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize Post Array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'user_id' => $_SESSION['user_id'],
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'source_link' => trim($_POST['source_link']),
          'title_err' => '',
          'body_err' => '',
        ];
        
        // Validate The Data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez ajoutez un titre';
        }
        if(empty($data['body'])){
          $data['body_err'] = "Ajoutez le contenu de l'article";
        }
        // Being Sure Source_link Is Set To Null
        if(empty($data['source_link'])){
          $sourceLinkError = $data->source_link_err; 
          $sourceLinkError = null;
        }
        // Make Sure There Are No Errors
        if(empty($data['title_err']) && empty($data['body_err'])) {

          if($this->postModel->addPost($data)){
            flash('post_message', 'Votre article a bien été ajouté et publié');
            redirect('pages/blog');
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
          'title_err' => '',
          'body_err' => '',
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
      // If Not Logged In Redirect
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
      // Load The View Posts List
      $this->view('posts/list', $data);
    }
    
    public function edit($id) {
      // If Not Logged In Redirect
      if(!isLoggedIn()){
        redirect('users/login');
      }
         
      $post = $this->postModel->getPostById($id);

      $data = [
        'post' => $post,
        'title' => '',
        'body' => '',
        'source_link' => '',
        'title_err' => '',
        'body_err' => '',
        ];

      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'id' => $id,
          'post' => $post,
          'user_id' => $_SESSION['user_id'],
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'source_link' => trim($_POST['source_link']),
          'title_err' => '',
          'body_err' => '',
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez ajoutez un titre';
        }
        if(empty($data['body'])){
          $data['body_err'] = "Ajoutez le contenu de l'article";
        }
        // Avoid Useless Request
        if($data['title'] == $this->postModel->getPostById($id)->title && $data['body'] == $this->postModel->getPostById($id)->body) {
          $data['title_err'] = "Vous devez au moins changer un des éléments suivants: titre, image, texte, lien.";
        }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err'])) {
          // Validated Form
          if($this->postModel->updatePost($data)){
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
      // If Not Logged In Redirect
      if(!isLoggedIn()){
        redirect('users/login');
      }
         
      $post = $this->postModel->getPostById($id);

      $data = [
        'post' => $post,
        'title' => '',
        'body' => '',
        'source_link' => '',
        'title_err' => '',
        'body_err' => '',
        ];

      
      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($this->postModel->deletePost($id)) {
          flash('post_message', 'L\'article a bien été supprimé');
          redirect("posts/list");
        } else {
          die('Something went wrong');
        }
      }
    }
  }

        