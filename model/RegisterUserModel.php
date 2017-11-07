<?php

class RegisterUserModel{
  private $notCorrectInputMessage;
  private static $name = 'RegisterView::UserName';
  private static $password = 'RegisterView::Password';
  private static $passwordRepeat = 'RegisterView::PasswordRepeat';
  private static $minimumNameLength = 3;
  private static $minimumPasswordLength = 6;

  public function __construct(){
  }

  public function innit($array){
    var_dump($array);
    if($this->checkPasswordLength($array)){
      return $this->notCorrectInputMessage;
    }elseif($this->checkNameLength($array)){
       return $this->notCorrectInputMessage;
    }else{
      return 'registration successful';
    }
  }

  private function checkNameLength($array){
    if(strlen($array[self::$name]) < self::$minimumNameLength){
      return $this->notCorrectInputMessage .= 'Username has too few characters, at least 3 characters.';
    }
  }

  private function checkPasswordLength($array){
    if (strlen($array[self::$password]) < self::$minimumPasswordLength) {
      return $this->notCorrectInputMessage .= 'Password has too few characters, at least ' . self::$minimumPasswordLength . ' characters.';
    }
  }

}
