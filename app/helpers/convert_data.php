<?php
/**
 * 
 */
// function sortData(array $data, array $new_data_array): array {
function convertPostData(array $data): array {

  // remove post & image, then store
  $data_base_arr = $data;

  foreach($data_base_arr as $k => $v) {
    unset($data_base_arr['post']);
    unset($data_base_arr['image']);
  }

  // store image values
  $data_img = $data['image']['image'];

  // store post values and convert to an array
  $data_post = (array) $data['post'];

  // finally merging arrays in special order
  $new_data_array = array_merge($data_base_arr, $data_post, $data_img);

  // echo $new_data_array;
  return $new_data_array;
}


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

  /**
   * Function convert an associative array 
   * to a single Array
   * 
   * @param array $data_array as input variable
   * @return array $new_data_array 
   */
  // function convertToSingleArray(array $data_array): array {

    
  //   $new_data_array = array_values($data_array);

  //   return $new_data_array;
  // }
?>