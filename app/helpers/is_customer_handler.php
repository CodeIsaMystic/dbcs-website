<?php 



/**
 * Function to get display return message 
 * Use case:  is_customer 
 * 
 * @param string the data form $data array as string
 * 
 * @return string the expected string message 
 */
function isCustomerHandler($data_str) {
  $result = $data_str === '1' 
  ? " est client(e). <br>" 
  : " n'est pas encore client(e). <br>" ;
  
  return $result;
}

?>