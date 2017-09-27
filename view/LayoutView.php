<?php


class LayoutView {
  
  public function render(LoginView $LoginView, $RegisterView, DateTimeView $DateTimeView) {
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          <a>Register a new user</a>
          ' . $this->renderIsLoggedIn($_SESSION['isLoggedIn']) . '
          ' . $LoginView->response() . '
          <div class="container">
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
