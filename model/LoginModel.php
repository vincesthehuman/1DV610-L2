<?php
class LoginModel{
  private $notCorrectInputMessage;

  public function __construct(){
  }

  //Should call on not emptyCredentials (Checking if password or username is present)
  //Should call on cehckCredentials if notEmptyCredentials is true
  public function checkLoginCredentials($array){
    if($this->emptyCredentials($array)){
      return $this->notCorrectInputMessage;
    }else{
     return 'Wrong name or password';
    }
  }

  private function emptyCredentials($array){
    $missingParam;
    foreach ($array as $key => $value) {
      if (strlen($value) <= 0) {
        return $this->notCorrectInputMessage .= ucfirst($key) . ' is missing';
      }
    }
  }

  private function checkCredentials(){
    
  }

}
