<?php

//INCLUDE THE FILES NEEDED...
require_once('controller/MainController.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();

//CREATE OBJECTS OF THE VIEWS
$mainController = new MainController();

$mainController->init();
