<?php

class LoginModel
{

    public function __construct()
    {
    }

    public function checkLoginCredentials($array)
    {
        $notCorrectInputMessage = '';
        foreach ($array as $key => $value) {
            if (strlen($value) <= 0) {
                return $notCorrectInputMessage .= ucfirst(strtolower(substr($key, 11))) . ' is missing';
            }
        }
        return $notCorrectInputMessage;
    }
}
