<?php


class LayoutView {
  
  public function render(DateTimeView $DateTimeView, $PageContent) {
    
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          ' . $PageContent->renderLink() . '
          ' . $this->renderIsLoggedIn($_SESSION['isLoggedIn']) . '
          <div class="container">
            ' . $PageContent->response() . '
            ' . $DateTimeView->show() . '
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

}
