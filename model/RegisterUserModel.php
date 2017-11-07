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
    if($this->checkNameLength($array)){
      return $this->notCorrectInputMessage;
    }elseif($this->checkPasswordLength($array)){
      return $this->notCorrectInputMessage;
    }else{
      return 'Somewhat of a success';
    }
  }

  private function checkNameLength($array){
    if(strlen($array[self::$name]) < self::$minimumNameLength){
      $this->notCorrectInputMessage .= 'Username has too few characters, at least ' . self::$minimumNameLength . ' characters.';
    }
  }

  private function checkPasswordLength($array){
    if (strlen($array[self::$password]) < self::$minimumPasswordLength) {
      $this->notCorrectInputMessage .= 'Password has too few characters, at least ' . self::$minimumPasswordLength . ' characters.';
    }
  }

}
