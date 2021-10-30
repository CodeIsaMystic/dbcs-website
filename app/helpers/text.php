<?php

// Get or extract only the first part of a large text
function getExcerpt($content, $limit = 120) {
  if (mb_strlen($content) <= $limit) {
      return $content;
    }

    $lastSpace = mb_strpos($content, ' ', $limit);

    return mb_substr($content, 0, $lastSpace) . ' ...';
  
} 

// Get Url source link formatted
function getSourceLinkFormatted($url) {
  $source_link = explode("/", $url);
  $source_link_formatted = "www." . $source_link[2];
  
  return $source_link_formatted;
}