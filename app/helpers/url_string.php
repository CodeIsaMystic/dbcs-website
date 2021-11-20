<?php


function getQueryStr(): string {
  return $_SERVER['QUERY_STRING'];
}

function stringMatchURL(string $url,string $str) {
  if(strpos($url, $str)) {
    
    return $str;
  } else {
    return false;
  } 
}

?>