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
    if(isset($_GET['register'])){
      return $this->LayoutView->render($this->DateTimeView, $this->RegisterView);
    }
    if(isset($_GET)){
      return $this->LayoutView->render($this->DateTimeView, $this->LoginView);
    }
  }
}
