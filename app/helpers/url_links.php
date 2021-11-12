<?php 
// To test it out...
// $url = 'https://stackoverflow.com/questions/3904482/match-url-pattern-in-php-using-a-regular-expression';
// $url2 = 'dflkjldjvdkmsdk/dmmfsk/dfsjdfsdkdùwww.flsjsdjlwww';
// $url3 = 'stackoverflow.com/questions/3904482/match-url-pattern-in-php-using-a-regular-expression';
// $url4 = 'http://stackoverflow.com/questions/3904482/match-url-pattern-in-php-using-a-regular-expression';
// $url5 = 'www.stackoverflow.com/questions/3904482/match-url-pattern-in-php-using-a-regular-expression';

// Checkout if Url is a valid pattern
function isValidURL(string $url, string $url_err) {

  if(preg_match('%\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))%s', $url)) {
    $url_err = "";
  } else {
    $url_err = "L\'adresse url n\'est pas correcte. Veuillez réessayer à nouveau.";
  }
}

// Invoked to test it out
// isValidURL($url, $url_err);
// isValidURL($url2, $url_err);
// isValidURL($url3, $url_err);
// isValidURL($url4, $url_err);
// isValidURL($url5, $url_err);




// Check the String for links url pattern before formatting 
function checkUrlStringPattern(string $url): bool {

  $pattern = "www.";
  $pos = strpos($url, $pattern);

  if ($pos === false) {
    return false;
  } else {
    return true;
  }
}

// Get the Website Url link formatted
function getWebsiteLinkFormat(string $url): string {
  

  if(!checkUrlStringPattern($url)) {
    $url = explode("/", $url);
    $url_formatted = "www." . $url[2];
  } else {
    $url = explode("/", $url);
    $url_formatted = $url[2];
  }
  return $url_formatted;
}

// Get the Article Website Url link formatted
function getArticleLinkFormat(string $url): string {


  if(!checkUrlStringPattern($url)) {
    $url = explode("/", $url);
    $url_formatted = "www." . $url[2] . '/' . $url[3] . '...';

  } else {
    $url = explode("/", $url);
    $url_formatted = $url[2] . '/' . $url[3] . '...';

  }
  return $url_formatted;
}