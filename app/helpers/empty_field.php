<?php 

/***
 * Switch the empty field function 
 * To a general and reusable one
 * Called `noDataProvided`
 * 
 * => address : nr, str, code postal, city
 * => customer: isCustomer, hadFreeCourse
 * => coaching plan: plan, date started plan, coaching subject
 * 
 * => partners deal: have deal, date started partnership, type of
 * => partners infos: is Web, logo, city
 * 
 */
 function noDataProvided($dataArray) {
  // $array[] = array_values($dataArray);
  
  
  
  // $array = [
  //     0 => $dataArray,
  //     // 1 => $dataArray['prospect'][1],
  //     // 2 => $dataArray['prospect'][2],
  //     // 3 => $dataArray[0][3],
  //     // 4 => $dataArray[0][4],
  //     // 4 => $dataArray[0][4],
  //   ];
  //   echo $array[0][0];
    
  // var_dump($array);
  // die();


  $array = [
      0 => $dataArray['prospect']->prospect_address_nr,
      1 => $dataArray['prospect']->prospect_address_str,
      2 => $dataArray['prospect']->prospect_postal_code,
      3 => $dataArray['prospect']->prospect_city,
      4 => $dataArray['prospect']->prospect_phone,
    ];

  echo '<br>';
  
  switch ($dataArray) {
    case (is_null($array[0]) || is_null($array[1]) || is_null($array[2]) || is_null($array[3])):
      echo 'Pas d\'adresse pour le moment';
      break;

    case (is_null($array[4])):
      echo ' Pas de numéro de téléphone pour le moment';
      break;

   }

  
 }


 // plan:
 // 1. get array_values
 // 2. store various messages info
 // 3. define various switch cases
 // 4. checkout if isNull is True


  function getNullMessage(int $msgVar) {
  
  switch ($msgVar) {
    case ($msgVar):
      echo 'Pas d\'adresse pour le moment';
      break;

    case ($msg = 1):
      echo ' Pas de numéro de téléphone pour le moment';
      break;
// ....
   }
 }


 // => array_values($arr)[$int];
 
 // => useless
//  function checkIfNull($str) {
//    return is_null($str);
//   }
  // => is_null($str);





function getNullValueMessage($array, $int, $msg) {
  if(is_null(array_values($array)[$int])) {
      echo ' Pas d\'adresse enregistré pour le moment.';
      
    } else {
      echo array_values($array)[$int] . ' ' . $data['prospect']->prospect_address_str . ' ' . $data['prospect']->prospect_postal_code . ' ' . $data['prospect']->prospect_city ;
    } 
}











 /* TODO: to remove */
// function emptyField() {
//   return 'Pas d\'informations pour le moment.';
// }





/**
 * 
 */
 function getArrPropVal($arr, $int) {
  return array_values($arr)[$int];
 }

/**
 * 
 * 
 */
function handlingData($arr) {
  // convert input $data Arra obj 
  $dataArr = convertDataObject($arr);



  // Extrtacting string value or null
  $propsectID = getArrPropVal($dataArr, 0);
  $propsectName = getArrPropVal($dataArr, 1);
  $propsectEmail = getArrPropVal($dataArr, 2);

  $propsectPhone = getArrPropVal($dataArr, 7);
  $propsectAddressNr = getArrPropVal($dataArr, 10);
  $propsectAddressStr = getArrPropVal($dataArr, 9);
  $propsectPostalCode = getArrPropVal($dataArr, 11);
  $propsectCity = getArrPropVal($dataArr, 12);



  // filtering propValue by binding in various Use cases
  function finalBuiltinPropValue($propValue) {

    if($propValue == $propsectPhone) {
      $strCase = 'Phone Case';

      return $strCase;

    } elseif (
      $propValue == $propsectAddressNr ||
      $propValue == $propsectAddressStr ||
      $propValue == $propsectPostalCode ||
      $propValue == $propsectCity 
    ) {
      $strCase = 'Address Case';

      return $strCase;
    }
    
    
    // checking if null then setting String Message
    switch ($strCase) {
    case 'phoneCase' :
      if(is_null($propsectPhone)) {
        
        echo ' Pas de numéro de téléphone pour le moment';
      }
      break;
      
      case 'addressCase' :
        if(
          is_null($propsectAddressNr) ||
          is_null($propsectAddressStr) ||
          is_null($propsectPostalCode) ||
          is_null($propsectCity) 
          ) {
            echo 'Pas d\'adresse pour le moment';
          }
          break;
    }
      
  }

  //finalBuiltinPropValue($propValue); //??????????????

}

function bindingPropKey($dataArr) {

  // convert input $data Arra obj 
  $dataArr = convertDataObject($arr);

  // Extrtacting string value or null
  $propsectPhone = 

  $data_set_addr = 
  $propsectAddressNr = getArrPropVal($dataArr, 10);
  $propsectAddressStr = getArrPropVal($dataArr, 9);
  $propsectPostalCode = getArrPropVal($dataArr, 11);
  $propsectCity = getArrPropVal($dataArr, 12);

  function getswitchCaseAsStr($str) {
    switch($str)  {
      case $propsectPhone:
        $value = getArrPropVal($dataArr, 7);
      break;
    }
  }





} 





?>