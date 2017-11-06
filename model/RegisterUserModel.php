<?php

class RegisterUserModel{
  private $notCorrectInputMessage;
  
  public function __construct(){
  }

  public function innit(){
  }

  private function checkPasswordLength($password){
    if (strlen($password) <= 3) {
      return $this->notCorrectInputMessage .= ucfirst($key) . ' is missing';
    }
  }

}
