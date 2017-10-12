<?php

require_once('view/RegisterView.php');;

class ViewController{
  private $RegisterView;

  public function __construct() {
    $this->RegisterView = new RegisterView();
  }

  public function render(){
    $this->RegisterView->response();
  }

}
