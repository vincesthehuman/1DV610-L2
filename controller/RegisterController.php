<?php
require_once('view/RegisterView.php');

class RegisterController{
  private $message;
  private static $username = 'username';
  private static $password = 'password';
  
  public function __construct(){
    $this->registerView = new RegisterView();
  }

  public function innit(){
    if($this->registrationAttempt()){
      return $this->registerView->response('You just tried to register');
    }
    return $this->registerView->response($this->message);
  }

  private function registrationAttempt(){
    return array_key_exists('DoRegistration', $_REQUEST);
  }

  private function getLoginRequest(){
    return $array = array(
    self::$username => $this->registerView->getRegisterUserName(),
    self::$password => $this->registerView->getRegisterPassword(),
    self::$repeatPassword => $this->registerView->getRgisterRepeatPassword()
    ); //'keepLoggedIn' => $this->loginView->getRequestKeepMeLoggedIn()
  }
  
}
