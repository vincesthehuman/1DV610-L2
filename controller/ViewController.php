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

  //Checks what client is trying to GET, renders page corresponding to that GET
  public function pageToRender(){
    if(isset($_GET['register'])){
      $this->LayoutView->render($this->DateTimeView, $this->RegisterView);
    }else{
      $this->LayoutView->render($this->DateTimeView, $this->LoginView);
    }
  }
}
