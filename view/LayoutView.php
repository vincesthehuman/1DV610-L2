<?php

class LayoutView {
  
  public function render(DateTimeView $DateTimeView, $PageContent) {
    var_dump($_SESSION);
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <p> ' . $_SESSION['foo'] . ' </p>
          <h1>Assignment 2</h1>
          ' . $PageContent->renderLink() . '
          <h2> ' . $this->renderIsLoggedIn() . ' </h2>
          <div class="container">
            ' . $PageContent->response() . '
            ' . $DateTimeView->show() . '
          </div>
         </body>
      </html>
    ';
  }

  private function renderIsLoggedIn(){
    if(!$_SESSION['LayoutView::isLoggedIn']){
      return 'Not logged in 1212121212121212';
    }else{
      return 'Logged in';
    }
  }
}
