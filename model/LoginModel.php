<?php

class LoginModel{
  
  public function __construct(){
  }

  public function checkLoginCredentials($array){
    $notCorrectInputMessage = '';
    foreach ($array as $key => $value) {
      if (strlen($value) <= 0) {
        return $notCorrectInputMessage .= $key . ' is missing';
      }
    }
  }

}
