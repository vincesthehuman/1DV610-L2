<?php

//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/RegisterView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//Starts session
session_start();

$_SESSION['isLoggedIn'] = false;
$_SESSION['userName'] = '';
$_SESSION['passsword'] = '';
$_SESSION['message'] = '';


//CREATE OBJECTS OF THE VIEWS
$LoginView = new LoginView();
$RegisterView = new RegisterView();
$DateTimeView = new DateTimeView();
$LayoutView = new LayoutView();


$LayoutView->render($LoginView, $RegisterView, $DateTimeView);

