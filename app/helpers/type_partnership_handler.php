<?php 

/**
 * Function to get display return message 
 * Use case:  type_partnership 
 * 
 * @param string the data form $data array as string
 * 
 * @return string the expected string message 
 */
function typePartnershipHandler($data_str) {
  if($data_str === 'default' || is_null($data_str)) {
    return 'Pas encore défini de partenariat pour le moment.';

  } elseif($data_str === 'collaboration') {
    return 'Pour une étroite collaboration.';

  } elseif($data_str === 'blogging') {
    return 'Accord autour de l\'activité de blog.';
    
  } elseif($data_str === 'shop') {
    return 'Accord commercial et/ou promotionel...';
    
  } elseif($data_str === 'event') {
    return 'Accord autour d\'évènements à venir...';
    
  } else {
    return 'Il y a eu une erreur...';
  }

}


?>