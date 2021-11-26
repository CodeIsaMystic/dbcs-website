<?php 

  /**
   * Function which extract data and build out the final expected result
   * 
   * @param array data array to extract before to build full address
   * @return string get final string full address or message if not
   * 
  */
  function addressHandler(array $data):string {
    // set & bind new variables
    $add_number = $data['prospect']->prospect_address_nr;
    $add_street = $data['prospect']->prospect_address_str;
    $postal_code = $data['prospect']->prospect_postal_code;
    $city = $data['prospect']->prospect_city;


    // build final address with $data array
    if(
      (isset($add_number) && !empty($add_number)) && 
      (isset($add_street) && !empty($add_street)) && 
      (isset($postal_code) && !empty($postal_code)) && 
      (isset($city) && !empty($city))
      ) {

        return $add_number . ' ' . $add_street . ' ' . $postal_code . ' ' . $city;
        
      } elseif(
      (empty($add_number) && is_null($add_number)) ||
      (empty($add_street) && is_null($add_street)) ||
      (empty($postal_code) && is_null($postal_code)) ||
      (isset($city) && !empty($city))
      ) {
      
        return $city;
      
    } else {
      
        return ' Pas d\'adresse valide enregistré pour le moment.';

    } 

  }
?>
          