<?php
// 9 street
// 10 num
// 11 postal code
// 12 city

// checker 
// is_null(array_values($prospect_array)[12])

// isset(array_values($prospect_array)[12])
// && array_values($prospect_array)[12] !== ''



// $data_arr;
// $arr = convertDataObject($data_arr); // to setup inside the view file


// to set in the view
// $converted_array = convertDataObject($arr);
// require APP_ROOT . '/helpers/convert_data';

function getSpanHTMLInView(string $str_content): string {
  $spanHTML = '<span class="txt-content--xsmall">' . $str_content . '</span>';

  return $spanHTML;
}


function addressErrorHandler($arr) {
  // $data_to_check = array_values($arr)[$key];

  
  // $converted_array = convertDataObject($arr);
  // var_dump($converted_array);

  // binding all variables with corresponding data
  $email = $arr['prospect_email'];
  $name = $arr['prospect_name'];
  
  $phone = $arr['prospect_phone'];

  $address_nr = $arr['prospect_address_nr'];
  $address_str = $arr['prospect_address_str'];
  $postal_code = $arr['prospect_postal_code'];
  $city = $arr['prospect_city'];

  $full_address = $address_str . '<br>' . $postal_code . ' ' . $city;


  // array of all errors messages according to use cases
  $err_address_msg = [
    0 => '',
    1 => 'Pas d\'adresse enregistré pour le moment.',
    2 => 'Attention, l\'adresse est incomplète.',
    3 => 'Vous avez seulement enregistré la ville dans votre base données.',
    4 => 'Il y a eu une erreur.'
  ];

  function isSetDataFromDataArr(mixed $data_to_check): bool {

    if(isset($data_to_check) && !empty($data_to_check)) {
      return true;
    } else {
      return false;
    }
  }

  // address handler logic
  if(
    is_null($address_nr) &&
    is_null($address_str) &&
    is_null($postal_code) &&
    is_null($city) 
    ) {
      echo $err_address_msg[1];
    } elseif(
    is_null($address_nr) ||
    is_null($address_str) ||
    is_null($postal_code) ||
    is_null($city) 
    ) {
      echo $err_address_msg[2];
    } elseif(
    is_null($address_nr) &&
    is_null($address_str) &&
    is_null($postal_code) &&
    isSetDataFromDataArr($city)
    ) {
      echo '<span class="txt-content--xsmall">' . $city . '</span>';
      echo $err_address_msg[3];
    } elseif(
      isSetDataFromDataArr($address_nr) &&
      isSetDataFromDataArr($address_str) &&
      isSetDataFromDataArr($postal_code) &&
      isSetDataFromDataArr($city)
    ) {
      echo '<span class="txt-content--xsmall">' . $full_address .'</span>';
      echo $err_address_msg[0];
    }
    else {
      echo $err_address_msg[4];
    } 
}




?>