<?php 

/* 
 * App Core Class
 * Create URL & loads core controller
 * URL Format - /controller/method/params
 */
class Core {
  protected $currentController = 'Pages'; 
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct() {

    $url = $this->getUrl();

    if (isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php'))
    {
      $this->currentController = ucwords($url[0]);
      unset($url[0]);
    }
    
    // Require the controller
    require_once '../app/controllers/' . $this->currentController . '.php';
    
    // Instantiate the controller class 
    $this->currentController = new $this->currentController;
    
    // Check for 2sd part of URL
    if(isset($url[1])) {
      if(method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        unset($url[1]);
      }
    }
   
    // Get params 3td part
    $this->params = $url ? array_values($url) : [];

    // Call a callback with an array of params
    call_user_func_array(
      [$this->currentController, $this->currentMethod], 
      $this->params);
  }

  public function getUrl() {
    if(isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);

      return $url;
    }
  }
}