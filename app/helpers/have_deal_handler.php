<?php 



/**
 * Function to get display return message 
 * Use case:  have_deal 
 * 
 * @param string the data form $data array as string
 * 
 * @return string the expected string message 
 */
function haveDealHandler($data_str) {
  $result = $data_str === '1' 
  ? "Un accord a été trouvé avec le partenaire. <br>" 
  : "Pas d'accord établi. <br>" ;
  
  return $result;
}

?>