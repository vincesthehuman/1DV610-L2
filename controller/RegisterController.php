<?php
require_once('view/RegisterView.php');
require_once('model/RegisterUserModel.php');

class RegisterController{
  private $message;
  private static $username = 'username';
  private static $password = 'password';
  private static $repeatPassword = 'repeatPassword';
  
  public function __construct(){
    $this->registerView = new RegisterView();
    $this->registerModel = new registerUserModel();
  }

  public function innit(){
    if($this->registrationAttempt()){
      //$_SESSION['RegisterView::UserName'] = $this->registerView->getRegisterUserName();
      return $this->registerView->response('You just tried to register');
    }
    return $this->registerView->response($this->message);
  }

  private function registrationAttempt(){
    return array_key_exists('DoRegistration', $_REQUEST);
  }

  private function getRegisterRequest(){
    return $array = array(
    self::$username => $this->registerView->getRegisterUserName(),
    self::$password => $this->registerView->getRegisterPassword(),
    self::$repeatPassword => $this->registerView->getRgisterRepeatPassword()
    ); //'keepLoggedIn' => $this->loginView->getRequestKeepMeLoggedIn()
  }
  
}
