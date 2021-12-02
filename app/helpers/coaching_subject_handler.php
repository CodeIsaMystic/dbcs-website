<?php 

/**
 * Function to get display return message 
 * Use case:  coaching_subject 
 * 
 * @param string|null the data form value $data['prospect'] array as string
 * 
 * @return string the expected string message 
 */
function coachingSubjectHandler($data_str) {
  if($data_str === 'default' || is_null($data_str)) {
    return 'Nous n\'avons pas encore défini d\'objectifs personnels en terme de coaching.';

  } elseif($data_str === 'basic') {
    return 'Le client souhaite suivre un programme classique.';

  } elseif($data_str === 'fit') {
    return 'Le client souhaite suivre un programme fitness.';
    
  } elseif($data_str === 'weight-loss') {
    return 'Le client souhaite suivre un programme régime.';
    
  } elseif($data_str === 'heart-beat') {
    return 'Le client souhaite travailler l\'endurance et le cardio.';
    
  } elseif($data_str === 'weight') {
    return 'Le client souhaite suivre un programme force & prise de muscle.';
    
  } elseif($data_str === 'sport') {
    return 'Le client souhaite suivre un programme spécifique sportif voir une préparation physique.';
    
  } elseif($data_str === 'health') {
    return 'Le client souhaite être actif principalement pour sa santé.';
    
  } elseif($data_str === 'injury') {
    return 'Le client revient de blessure, il (ou elle) souhaite suivre un programme de reprise.';
    
  } else {
    return 'Il y a eu une erreur...';
  }

}


?>