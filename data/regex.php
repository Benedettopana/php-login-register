<?php

function isValidEmail($email) {
  $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  return preg_match($regex, $email);

  if(preg_match($regex, $email)){
    return true;
  }

  return false;
}

?>