<?php 


/**
 * Function get a basic date formatted Day Month Year
 * @param string the input date before formatting
 * 
 * @return string the output date formatted
 */
function getDateFormatted(string $string) {
  $date = date_create($string);

  return date_format($date, 'd-m-Y');
}