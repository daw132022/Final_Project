<?php

//Start Session
session_start();

//Include Config
require('config.php');

require ('classes2/Messages.php');
require('classes2/Bootstrap.php');
require ('classes2/Controller.php');
require ('classes2/Model.php');

require('controlers/home.php');
require('controlers/shares.php');
require('controlers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController(); //Nos guardamos una instancia del controlador  users
if($controller){
    $controller->executeAction();//ejecuto la accion de login
}