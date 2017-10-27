<?php
require_once('view/RegisterView.php');

class RegisterController
{
    public function __construct()
    {
        $this->registerView = new RegisterView();
    }

    public function innit()
    {
        return $this->registerView->response();
    }

    private function registrationAttempt()
    {
        return array_key_exists('DoRegistration', $_REQUEST);
    }
}
