<?php

require_once('view/LoginView.php');
require_once('view/RegisterView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');

class ViewController{
  private $LayoutView;
  private $LoginView;
  private $RegisterView;
  private $DateTimeView;

  public function __construct() {
    //CREATE OBJECTS OF THE VIEWS
    $this->LayoutView = new LayoutView();
    $this->LoginView = new LoginView();
    $this->RegisterView = new RegisterView();
    $this->DateTimeView = new DateTimeView();
  }

  public function pageToRender(){
    //Checks the requested uri, 
    $requestedRoute = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    switch ($requestedRoute[0]) {
      case 'register':
        $this->LayoutView->render($this->DateTimeView, $this->RegisterView);
        break;
      case '':
        $this->LayoutView->render($this->DateTimeView, $this->LoginView);
        # render login view
        break;
    }
  }
}
