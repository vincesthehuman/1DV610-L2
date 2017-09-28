<?php

require_once('controller/ViewController.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();

$_SESSION['isLoggedIn'] = false;
$_SESSION['userName'] = '';
$_SESSION['passsword'] = '';
$_SESSION['message'] = '';

$ViewController = new ViewController();

$ViewController->pageToRender();
