<?php 


/**
 * Function get value from input if checked
 * @param string the string data to checkout
 * 
 * @return integer 1 or 0 if checked or not
 */
function handleCheckboxValue($data_str): int {
  if(!isset($data_str)) {
    // $data_str = 0;
    // return $data_str;

    return 0;

  } else {
    // $data_str = 1;
    // return $data_str;

    return 1;
  }
}

?>