<?php
session_start();
 //establecer errores
 ini_set('display_errors', 'On');
require 'config.php';
require APP.'/src/route.php';




$controller=getRoute();
require APP.'/src/controllers/'.$controller.'.php';



