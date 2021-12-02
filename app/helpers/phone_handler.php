<?php  


/**
 * Function validating phone data if true
 * => validating regex, length of 10
 * 
 * @param string phone string data to checkout
 * 
 * @return bool 
 */
function isValidPhone($data_str): bool {
  if((strlen($data_str) >= 1)) {
    if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $data_str)) {
      return true;
    } elseif((strlen($data_str) === 10)) {
      return true;
    } else {
      return false;
    }
  } else {
    return true;
  }
}



/**
 * Function to get display return value
 * Use case:  phone checker 
 * 
 * @param mixed the data form $data array as string || null
 * 
 * @return string the expected string message 
 */
function phoneHandler($data_str): string {
  if((strlen($data_str) >= 1)) {
    if (
      (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $data_str)) &&
      (strlen($data_str) === 10)
    ) {
      return $data_str;
    } else {
      return 'Le numéro enregistré est incorrect.';

    }
  } elseif((strlen($data_str) === 0) || is_null($data_str)) {
    return 'Aucun numéro enregistré pour le moment.';
  } else {
    return 'Il y a eu une erreur';
  }
}


?>