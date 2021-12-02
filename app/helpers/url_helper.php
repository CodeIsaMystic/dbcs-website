<?php

  /**
   * Function helps to set URL path to redirect
   * @param string the string url custom path pre defined
   * 
   * @return string final, complete & custom URL path 
   */
  function redirect(string $page): string {
    header('location: ' . URL_ROOT . '/' . $page);
  }
  
  /**
   * Function redirect to login page if not logged in
   * 
   */
  function redirectToLogin() {
    if(!isLoggedIn()){
        redirect('users/login');
    }
  }

  
  /**
   * Function to get $_SERVER['QUERY_STRING'] shortcut 
   * 
   * @return string $_SERVER['QUERY_STRING'] of current page
   */
  function getQueryStr(): string {
    return $_SERVER['QUERY_STRING'];
  }


  /**
   * Function checkout if a string is contained within a string url
   * 
   * @param string the url string to checkout
   * @param string the string pattern to play around 
   */
  function stringMatchURL(string $url,string $str) {
    
    if(strpos($url, $str)) {
      return $str;
      
    } else {
      return false;
    }
  }

  /**
   * Function checkout if the string url match with regex pattern
   *  => mainly 'http://', 'https//', 'www', '.'
   * 
   * @param string the url string to checkout
   * 
   * @return bool true or false if match or not
   */
  function isValidURL(string $url): bool {

    if(preg_match('%\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))%s', $url)) {
      return true;
    } else {
      return false;
    }
  }


  /**
   * Function simply checkout if the 'www.' pattern 
   *  is present within the url string
   * 
   * @param string the url string to checkout
   * 
   * @return bool true if the pattern exists within the url 
   * or false if not 
   */
  function checkUrlStringPattern(string $url): bool {

    $pattern = "www.";
    $pos = strpos($url, $pattern);

    if ($pos === false) {
      return false;
    } else {
      return true;
    }
  }

  /**
   * Function format the link url within the view 
   * add 'www.' or not
   * @param string the url string to checkout
   * 
   * @return string the final link/url string to display in the view
   */
  function getLinkFormat(string $url): string {
    
    if(!checkUrlStringPattern($url)) {
      $url = explode("/", $url);
      $url_formatted = "www." . $url[2];
    } else {
      $url = explode("/", $url);
      $url_formatted = $url[2];
    }
    return $url_formatted;
  }
?>