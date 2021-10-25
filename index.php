<?php
session_start();
//ini_set('display_errors', 'On');
//require connection variables 
require 'config.php';
//require "router"
require APP.'/src/route.php';

//getRoute gets $_REQUEST information from url
$controller=getRoute();
require APP.'/src/controllers/'.$controller.'.php';



<<<<<<< HEAD
=======


>>>>>>> 4188131170044d001b7f75e83adafbff44909581
