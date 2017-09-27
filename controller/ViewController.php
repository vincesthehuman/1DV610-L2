<?php

class ViewController{

  public function renderPage(){
    $requestedRoute = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    switch ($requestedRoute) {
      case 'register':
        # render register view
        break;
      
      default:
        # render login view
        break;
    }
  }
}
