<?php

/**
 * Function get only the first part of a large text
 * @param string the entire text content
 * @param int the character number to extract and display
 * 
 * @return string the extract text content to display as string  
 */
function getExcerpt(string $content,int $limit = 120): string {
  if (mb_strlen($content) <= $limit) {
      return $content;
  }

  $lastSpace = mb_strpos($content, ' ', $limit);

  return mb_substr($content, 0, $lastSpace) . ' ...';
  
} 

