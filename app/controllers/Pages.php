<?php 


class Pages extends Controller {
  public function __construct() {
      $this->postModel = $this->model('Post');
  }

  public function index() {
    
    $data = [
      'title' => 'Aimez le sport par le coaching!',
      'description' => 
      'Nous vous aidons à construire votre santé. Nous soutenons vos
      objectifs. Nous prenons en compte vos contraintes et difficultés -
      365 jours / 365, nous travaillerons ensemble à vous rendre
      meilleur jour après jour.'
    ];
    
    
    $this->view('pages/index', $data);
    
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
    
      $data = [
        'title' => 'Vous voulez garder le contact?',
        'description' => "Nous vous aidons à construire votre santé. Nous soutenons vos objectifs. Nous prenons en compte vos contraintes et difficultés."
    ];
    $this->view('pages/contact', $data);
  }

}