<?php
require_once('view/LoginView.php');
require_once('model/LoginModel.php');

class LoginController {

  public function __construct() {
    $this->loginView = new LoginView();
    $this->loginModel = new LoginModel();
  }

  public function innit(){
    $this->loginAttempt();
    return $this->loginView->response();
  }

  private function loginAttempt(){
    $array = array(
      'username' => $this->loginView->getRequestUserName(),
      'password' => $this->loginView->getRequestPassword(),
      'keepLoggedIn' => $this->loginView->getRequestKeepMeLoggedIn()
    );
    $this->loginModel->innit($array);
  }

}
