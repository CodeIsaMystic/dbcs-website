<?php 


// Get a basic string date formatted with Day-Month-Year
function getDateFormatted($string) {
  $date = date_create($string);

  return date_format($date, 'd-m-Y');
}