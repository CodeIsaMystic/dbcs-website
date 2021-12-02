<?php 


/**
 * Function get value from input if checked
 * @param string the data string to checkout
 * 
 * @return integer 1 or 0 if checked or not
 */
function handleCheckboxValue(string $data_str): int {
  if(isset($data_str)) {
    return 1;

  } else {
    return 0;
  }
}

?>