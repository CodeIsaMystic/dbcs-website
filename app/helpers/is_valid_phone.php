<?php

/**
 * Function validating phone data if true
 * => validating regex, length of 10
 * 
 * @param string phone string data to checkout
 * 
 * @return bool 
 */
function isValidPhone($phoneData): bool {
  if((strlen($phoneData) >= 1)) {
    if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $phoneData)) {
      return true;
    } elseif((strlen($phoneData) === 10)) {
      return true;
    } else {
      return false;
    }
  } else {
    return true;
  }
}

?>