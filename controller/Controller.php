<?php

class Controller {
  public function __construct() {
  }

  public function pageToRender(){
    switch ($_GET) {
      case 'register':
        # code...
        break;
      
      case 
      default:
        # code...
        break;
    }
    if(isset($_GET['register'])){
      $this->LayoutView->response();
    }else{
      $this->LayoutView->response();
    }
  }
}