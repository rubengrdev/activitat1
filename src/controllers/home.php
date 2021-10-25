<?php

require APP.'/lib/render.php';
require './lib/functionality.php';
$uname=$_SESSION['uname']??'';
echo render('home',["nom"=>"home ".$uname]);
//llamada  a la función sessionStatus, según el usuario esté "logueado" o no mostrará un active o innactive
 sessionStatus();
 //llamada  a la función que se ocupa de crear los breadcrumbs
//conseguimos la ruta de la ubicación actual
$location = getRoute();
$_SESSION["location"]=breadcrumbs($location);
 setcookie("location", $_SESSION["location"], 0,"/", "localhost");
