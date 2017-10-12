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
  
  public function render($isLoggedIn, DateTimeView $dtv) {
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          ' . $this->renderIsLoggedIn($isLoggedIn) . '
          
          <div class="container">
              ' . $this->contentToRender() . '
              
              ' . $dtv->show() . '
          </div>
         </body>
      </html>
    ';
  }
  
  private function renderIsLoggedIn($isLoggedIn) {
    if ($isLoggedIn) {
      return '<h2>Logged in</h2>';
    }
    else {
      return '<h2>Not logged in</h2>';
    }
  }

    //OM jag är i en viss vy så visar jag en viss länk
    //ToDo, en switchsats som renderar länk som korresponderar mot vilken GET användaren befinner sig i
	private function renderLoginLink(){
		return '<a href="?">Back to login</a>';
  }
  
  private function renderRegisterLink(){
    return '<a href="?register">Register a new user</a>';
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

  //Kolla om vad användaren vill göra genom att köra urlView i den vy som jag vill köra?
}