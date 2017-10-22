<?php

require_once('UrlView.php');
require_once('LoginView.php');
require_once('RegisterView.php');

class LayoutView {
  private $urlView;
  private $registerView;
  private $loginView;

  public function __construct(){
    $this->urlView = new UrlView();
    $this->registerView = new RegisterView();
    $this->loginView = new LoginView();
  }
  
  public function render($isLoggedIn, DateTimeView $dtv){
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          ' . $this->renderLink() . '
          ' . $this->renderIsLoggedIn($isLoggedIn) . '
          
          <div class="container">
              ' . $this->contentToRender() . '
              ' . $dtv->show() . '
          </div>
         </body>
      </html>
    ';
  }

  private function renderLink(){
    switch ($this->urlView->getUrl()){
      case 'register':
        return $this->renderLoginLink();
        break;
      
      default:
        return $this->renderRegisterLink();
        break;
    }
  }
  
  private function renderIsLoggedIn($isLoggedIn) {
    if ($isLoggedIn) {
      return '<h2>Logged in</h2>';
    }
    else {
      return '<h2>Not logged in</h2>';
    }
  }

  private function contentToRender(){
    switch ($this->urlView->getUrl()) {
      case 'register':
        return $this->registerView->response();
        break;
      
      default:
        return $this->loginView->response();
        break;
    }
  }

	private function renderLoginLink(){
		return '<a href="?">Back to login</a>';
  }
  
  private function renderRegisterLink(){
    return '<a href="?register">Register a new user</a>';
  }

}
