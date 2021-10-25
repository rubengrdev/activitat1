<?php

 //cuando el usuario haga logout las variables de sessión se borrarán
if(isset($_COOKIE['rememberdata'])){
    if(isset($_SESSION["rememberLoginCounter"]) && $_SESSION["rememberLoginCounter"]==true){    //esto hará que los datos solo sean utilizados una unica vez
        $user=$_SESSION["rememberUser"];
        setcookie("testdata", $user, time()+300);
        $password=$_SESSION["rememberPassword"];
    }
    setcookie("getDate", false, time()+0);   //borramos la variable getDate
    setcookie("getUser", false, time()+0);
    setcookie("rememberdata", false, time()+0);
    //Apunte: La variable getDate no se puede eliminar, así que en el archivo /resources/date.js se implementa la configuración de 
    //que si la sessión rememberdata deja de existir no se mostrará en el home la última visit
    //"arreglo" temporal de aviso de las cookies
    $_SESSION["noCookienoAcces"]=false; //la variable se borra, pero yo no quiero cada vez que el usuario se va de la página que se borre su configuración de las cookies
}
session_destroy();  //Destruimos la sessión y borramos todas las variables existentes
session_start();    //Volvemos a crear una nueva sessión vacia
//Recuperamos las variables borradas ya que el usuario no quiere perder su sessión
if(isset($user) && isset($password)){
    //Arreglo provisional de las variables de sessión o cookies
    $_SESSION["rememberUser"]= $user;
    $_SESSION["rememberPassword"]= $password;
    setcookie("rememberdata", true, 0 ,"/", "localhost");
    $date=date("F j, Y, g:i a");
    //creacion de cookie con la fecha actual
    setcookie("getDate", $date, 0 ,time()+3600);
    $_SESSION["rememberLoginCounter"] = false;
}
header('location:?url=home');