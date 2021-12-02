<?php  

/**
 * Function to get display return message 
 * Use case:  ask_free_course 
 * 
 * @param string the data form $data array as string
 * 
 * @return string the expected string message 
 */
function askFreeCourseHandler($data_str): string {
  $result = $data_str === '1' 
  ? " a demandé son essai gratuit. <br>" 
  : " n'a pas demandé son essai gratuit. <br>" ;
  
  return $result;
}



/**
 * Function to get display return message 
 * Use case:  free_course 
 * 
 * @param string the data form $data array as string
 * 
 * @return string the expected string message 
 */
function freeCourseHandler($data_str):string {
  $result = $data_str === "1" 
  ? "Le prospect  deja a bénéficié de la promotion." 
  : "Le prospect n'a pas encore bénéficié de la promotion." ;

  return $result;
}

?>
