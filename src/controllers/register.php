<?php
//ini_set('display_errors', 'On');
require APP.'/lib/render.php';
require './lib/functionality.php';
cookiePolicyAccept();   //si no aceptamos las cookies no hay servicio
if(isset($_COOKIE['rememberdata']) || isset($_COOKIE["status"])){
    if($_COOKIE["status"] == "active" && isset($_SESSION["profile"])){
    header('location:?url=dashboard');
    }
}
echo render("register",["nom" => "register"]);
$location = getRoute();
$_SESSION["location"]=breadcrumbs($location);
setcookie("location", $_SESSION["location"], 0,"/", "localhost");