<?php

/**
 * Function which add the 'selected' string or not to a <select> HTML element
 * 
 * @param string|null to checkout if set or not then apply the 'selected' or not
 * 
 * @return string 'selected' on the HTML element as attribute
 */
function applySelectedAttr($data_str): string {
  return isset($data_str) ? 'selected' : '';
}


?>