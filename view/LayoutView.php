<?php


class LayoutView {
  
  public function render($isLoggedIn, LoginView $v, $RegisterView, DateTimeView $dtv) {
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          <a>Register new user</a>
          ' . $this->renderIsLoggedIn($isLoggedIn) . '
          ' . $v->response() . '
          <div class="container">
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
}
