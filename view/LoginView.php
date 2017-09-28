<?php

class LoginView {
	private static $login = 'LoginView::Login';
	private static $logout = 'LoginView::Logout';
	private static $name = 'LoginView::UserName';
	private static $password = 'LoginView::Password';
	private static $cookieName = 'LoginView::CookieName';
	private static $cookiePassword = 'LoginView::CookiePassword';
	private static $keep = 'LoginView::KeepMeLoggedIn';
  private static $messageId = 'LoginView::Message';
  
  private $requestUsername = '';


	/**
	 * Create HTTP response
	 *
	 * Should be called after a login attempt has been determined
	 *
	 * @return void BUT writes to standard output and cookies!
	 */
	 
	public function response() {
    $message = $_SESSION['message'];

    if($this->loginAttempt()){
      $message .= $this->validateLoginInput();
    }

    if($this->isLoggedIn()){
      $response .= $this->generateLogoutButtonHTML($message);
    }

    $response = $this->generateLoginFormHTML($message);
		return $response;
	}

	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLogoutButtonHTML($message) {
		return '
			<form  method="post" >
				<p id="' . self::$messageId . '">' . $message .'</p>
				<input type="submit" name="' . self::$logout . '" value="logout"/>
			</form>
		';
	}
	
	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLoginFormHTML($message) {
		return '
			<form method="post" > 
				<fieldset>
					<legend>Login - enter Username and password</legend>
					<p id="' . self::$messageId . '">' . $message . '</p>
					
					<label for="' . self::$name . '">Username :</label>
					<input type="text" id="' . self::$name . '" name="' . self::$name . '" value="' . $this->requestUsername . '" />

					<label for="' . self::$password . '">Password :</label>
					<input type="password" id="' . self::$password . '" name="' . self::$password . '" />

					<label for="' . self::$keep . '">Keep me logged in  :</label>
					<input type="checkbox" id="' . self::$keep . '" name="' . self::$keep . '" />
					
					<input type="submit" name="' . self::$login . '" value="login" />
				</fieldset>
			</form>
		';
  }

  private function validateLoginInput(){
    $notCorrectInputMessage = '';
    foreach ($_REQUEST as $key => $value) {
      if(strlen($value) <= 0){
        return $notCorrectInputMessage .= ucfirst(strtolower(substr($key, 11))) . ' is missing';
      }
      $this->requestUsername .= $this->getRequestUserName();
    }
    return $notCorrectInputMessage;
	}
	
	public function renderLink(){
		return '<a href="?register">Register a new user</a>';
	}

  //ToDo
  //Save the login name if no password is put in

  private function isLoggedIn(){
		return $_SESSION['isLoggedIn'];
  }
  
  public function loginAttempt(){
    return isset($_REQUEST[self::$login]);
  }
	
	//CREATE GET-FUNCTIONS TO FETCH REQUEST VARIABLES
	private function getRequestUserName() {
    return $_REQUEST[self::$name];
  }

  private function getRequestPassword() {
    return $_REQUEST[self::$password];
  }

  private function getRequestKeepMeLoggedIn() {
    return $_REQUEST[self::$keep];
  }
  

}