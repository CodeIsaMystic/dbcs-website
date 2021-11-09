<?php 
// Plan: 
//  # error messages
//    => "Veuillez vérifier l'adresse url du site. Cela ne doit pas être correct."
//  # sourceLinkIsValid() function built 
//      => use case:
//          - "www" pattern -> checkUrlStringPattern
//          - regex http:// or https//



// Check the String source_link url pattern before formatting 
function checkUrlStringPattern($url) {
  // Note: 
  //  switch string's "www." pattern  to regex
  //
  //




  $pattern = "www.";
  $pos = strpos($url, $pattern);

  if ($pos === false) {
    return false;
  } else {
    return true;
  }
}


// Get the Website Url source link formatted
function getWebsiteSourceLinkFormatted($url) {
  

  if(!checkUrlStringPattern($url)) {
    $url = explode("/", $url);
    $url_formatted = "www." . $url[2];
  } else {
    $url = explode("/", $url);
    $url_formatted = $url[2];
  }
  return $url_formatted;
}




// Get the Article Website Url source link formatted
function getArticleSourceLinkFormatted($url) {


  if(!checkUrlStringPattern($url)) {
    $url = explode("/", $url);
    $url_formatted = "www." . $url[2] . '/' . $url[3] . '/' . $url[4];

  } else {
    $url = explode("/", $url);
    $url_formatted = $url[2] . '/' . $url[3] . '/' . $url[4];

  }
  return $url_formatted;
}