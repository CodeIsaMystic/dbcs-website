<?php 

// Checkout if Url is a valid pattern
function isValidURL(string $url): bool {
  if(preg_match('%\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))%s', $url)) {
    return true;
  } else {
    return false;
  }
}


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

// Get the Url link formatted
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