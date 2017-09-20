<?php

class RegisterView {
	private static $login = 'RegisterView::Login';
	private static $logout = 'RegisterView::Logout';
	private static $name = 'RegisterView::UserName';
	private static $password = 'RegisterView::Password';
	private static $cookieName = 'RegisterView::CookieName';
	private static $cookiePassword = 'RegisterView::CookiePassword';
	private static $keep = 'RegisterView::KeepMeLoggedIn';
  private static $messageId = 'RegisterView::Message';


	/**
	 * Create HTTP response
	 *
	 * Should be called after a login attempt has been determined
	 *
	 * @return  void BUT writes to standard output and cookies!
	 */
	public function response() {
    $message = '';

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


  

}