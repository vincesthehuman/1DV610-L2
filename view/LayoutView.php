<?php


class LayoutView {
  
  public function render($isLoggedIn, LoginView $v, DateTimeView $dtv) {
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          ' . $this->renderIsLoggedIn($isLoggedIn) . '
          
          <div class="container">
              ' . $v->response() . '
              
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

    //OM jag är i en viss vy så visar jag en viss länk
    //ToDo, en switchsats som renderar länk som korresponderar mot vilken GET användaren befinner sig i
	public function renderLink(){
		return '<a href="?">Back to login</a>';
	}

  //Kolla om vad användaren vill göra genom att köra urlView i den vy som jag vill köra?
}