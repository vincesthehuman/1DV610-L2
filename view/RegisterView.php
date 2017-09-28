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

    $response = $this->generateRegisterFormHTML();
		return $response;
	}
	
	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateRegisterFormHTML() {
		return '
		<h2>Register new user</h2>
		<form method="post">
			<fieldset>
			<legend>Register a new user - Write username and password</legend>
				<p id="Message"></p>
				<label for="UserName" >Username :</label>
				<input type="text" size="20" name="RegisterView::UserName" id="RegisterView::UserName" value="" />
				<br/>
				<label for="RegisterView::Password" >Password  :</label>
				<input type="password" size="20" name="RegisterView::Password" id="RegisterView::Password" value="" />
				<br/>
				<label for="RegisterView::PasswordRepeat" >Repeat password  :</label>
				<input type="password" size="20" name="RegisterView::PasswordRepeat" id="RegisterView::PasswordRepeat" value="" />
				<br/>
				<input id="submit" type="submit" name="DoRegistration"  value="Register" />
				<br/>
			</fieldset>
			</form>
		';
	}
	
	public function renderLink(){
		return '<a href="/">Back to login</a>';
	}


  

}