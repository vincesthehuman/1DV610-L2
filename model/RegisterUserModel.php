<?php

class RegisterUserModel{
  private $notCorrectInputMessage;

  private static $name = 'RegisterView::UserName';
  private static $minimumNameLength = 3;
  private static $password = 'RegisterView::Password';
  private static $passwordRepeat = 'RegisterView::PasswordRepeat';
  private static $minimumPasswordLength = 6;

  public function __construct(){
  }

  public function innit(){
  }

  private function checkNameLength($name){
    if(strlen($name) <= $this->minimumNameLength){
      return 'Username has too few characters, at least ' . $this->minimumNameLength . ' characters.';
    }
  }

  private function checkPasswordLength($password){
    if (strlen($password) <= $this->minimumPasswordLength) {
      return 'Password has too few characters, at least ' . $this->minimumPasswordLength . ' characters.';
    }
  }

}
