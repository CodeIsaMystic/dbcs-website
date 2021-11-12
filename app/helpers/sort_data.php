<?php

// Cleaning edited $data Array 
// - removing 'post' & 'image' rows
// - merging base, image & post data separately
// - storing data within $new_data_array
function sortData(array $data, array $new_data_array): array {
  
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

  return $new_data_array;
}


// Clean out Array of data
// function cleanOutDataArray(array $arr) {
//   foreach ($arr as $key => $value) {
//       if (empty($value)) {
//         echo 'Clean new array';
//         unset($arr[$key]);
//       }
//   }
//   if (empty($arr)) {
//     //empty array
//   }
// }


// USE CASE: $data['post']->image = 'Array' as string
// function emptyArrToString(array $arr) {
//     return (count($arr) === 0) ? "" : $arr;
// }
