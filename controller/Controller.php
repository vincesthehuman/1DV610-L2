<?php

class Controller {
  public function __construct() {
  }

  public function handlePost(){
    //var_dump(end($_REQUEST));
    
    if(array_key_exists('DoRegistration', $_REQUEST)){
      var_dump('doRegistration is active!11!!');
    }else{
      var_dump('nothing ere innit');
    }
  }
  
}
