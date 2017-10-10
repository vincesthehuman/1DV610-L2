<?php

require_once('view/LayoutView.php');

class LoginView {
	private static $login = 'LoginView::Login';
	private static $logout = 'LoginView::Logout';
	private static $name = 'LoginView::UserName';
	private static $password = 'LoginView::Password';
	private static $cookieName = 'LoginView::CookieName';
	private static $cookiePassword = 'LoginView::CookiePassword';
	private static $keep = 'LoginView::KeepMeLoggedIn';
  private static $messageId = 'LoginView::Message';
  private static $sessionMessage = 'LoginView::sessionMessage';
	private static $requestUsername = '';
	private static $isLoggedIn = 'LayoutView::isLoggedIn';

	
	/**
	 * Create HTTP response
	 *
	 * Should be called after a login attempt has been determined
	 *
	 * @return void BUT writes to standard output and cookies!
	 */
	 
	public function response() {

    if($this->loginAttempt()){
      $_SESSION[self::$sessionMessage] .= $this->validateLoginInput();
    }

    //if($this->isLoggedIn()){
    //  $response .= $this->generateLogoutButtonHTML();
    //}

    return $this->generateLoginFormHTML();
	}

	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLogoutButtonHTML() {
		return '
			<form  method="post" >
				<p id="' . self::$messageId . '">' . $_SESSION[self::$sessionMessage] .'</p>
				<input type="submit" name="' . self::$logout . '" value="logout"/>
			</form>
		';
	}
	
	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLoginFormHTML() {
		return '
			<form method="post" > 
				<fieldset>
					<legend>Login - enter Username and password</legend>
					<p id="' . self::$messageId . '">' . $_SESSION[self::$sessionMessage] . '</p>
					
					<label for="' . self::$name . '">Username :</label>
					<input type="text" id="' . self::$name . '" name="' . self::$name . '" value="' . self::$requestUsername . '" />

					<label for="' . self::$password . '">Password :</label>
					<input type="password" id="' . self::$password . '" name="' . self::$password . '" />

					<label for="' . self::$keep . '">Keep me logged in  :</label>
					<input type="checkbox" id="' . self::$keep . '" name="' . self::$keep . '" />
					
					<input type="submit" name="' . self::$login . '" value="login" />
				</fieldset>
			</form>
			' . $_SESSION['foo'] . ' 
		';
  }

  private function validateLoginInput(){
		$this->getAndSetRequestUserName();

    return $this->checkIfCorrectLoginInput();
	}
	
	public function renderLink(){
		return '<a href="?register">Register a new user</a>';
	}

	private function checkIfCorrectLoginInput(){
		foreach ($_REQUEST as $key => $value) {
      if(strlen($value) <= 0){
        return ucfirst(strtolower(substr($key, 11))) . ' is missing';
      }
		}
		$this->checkCredentials();
	}

	private function checkCredentials(){
		if($_REQUEST[self::$name] != 'Admin'){
			return $_SESSION[self::$sessionMessage] .= 'Wrong name or password';
		}elseif($_REQUEST[self::$password] != 'Password'){
			return $_SESSION[self::$sessionMessage] .= 'Wrong name or password';
		}elseif($_REQUEST[self::$password] = 'Password' && $_REQUEST[self::$name] = 'Admin'){
			return $_SESSION['foo'] = 'true cockface';
		}
	}
  
  public function loginAttempt(){
    return isset($_REQUEST[self::$login]);
  }
	
	private function getAndSetRequestUserName() {
    self::$requestUsername .= $_REQUEST[self::$name];
  }

  private function getRequestPassword() {
    return $_REQUEST[self::$password];
  }

  private function getRequestKeepMeLoggedIn() {
    return $_REQUEST[self::$keep];
  }

}