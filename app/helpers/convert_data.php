<?php
  /**
   * Function convert Data[0] object 
   * to an associative array
   * 
   * @param array $data_array as input variable
   * @return array $new_data_array 
   */
  function convertDataObject(array $data_array): array {
    
    foreach($data_array as $data_array_item) { 
      $new_data_array = get_object_vars($data_array_item);
    }

    return $new_data_array;
  }

?>