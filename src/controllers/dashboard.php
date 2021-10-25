<?php
//ini_set('display_errors', 'On');
require APP.'/lib/render.php';
require './lib/functionality.php';
cookiePolicyAccept();   //si no aceptamos las cookies no hay servicio
//comprobación para que no haya errores: si la sesión no está activa hay que denegarle el acceso a dashboard, y enviarlo a login
if($_COOKIE["status"] != "active"){
    header('location:?url=login');
}
echo render("dashboard",["nom" => "dashboard"]);
//conseguimos la ruta de la ubicación actual
$location = getRoute();
$_SESSION["location"]=breadcrumbs($location);
setcookie("location", $_SESSION["location"], "/", "localhost");