<?php
//función para determinar el status visualmente de la sessión
function sessionStatus(){
    if(isset($_SESSION['profile'])){    //profile es una variable (array) que contiene todos los datos de el usuario de una consulta, pero la aproveharemos para ver si está creada
        $status = "active"; 
    }else{
        $status = "innactive";
    }
    //generamos una cookie con el estado de nuestra session
    setcookie("status",$status, 0, "/", "localhost");
}

function isTeacher($email){
    if(preg_match("/@escolesnuria.cat/",$email)){
        return 2;   //en la base de datos "1=alumn" -> "2 = teacher"
    }
    return 1;
}
//comprovación de 2 contraseñas ("hasehadas")
function passwordVerify($pass, $dbPass){
    if($pass === $dbPass){
        return true;
    }else{
        return false;
    }
}
function breadcrumbs($location){
    
switch($location){
    case "home":
        return "Home";
        break;
    case "login":
        return  "Home /Login";
        break;
    case "register":
        return  "Home / Register";
        break;
    case "dashboard":
        return  "Home / Login / Dashboard";
        break;
}
}
function prepareBreadcrumb ($route){    //le estamos pasando un array
    $path = array();
    foreach($route as $val){
       $path[]= "/".$val;
    }
  
    return $path;
}
//selecionador de role según la BD (o 1 o 2)
function roleDefiner($role){
    if($role == 1){
        return "student";
    }elseif($role == 2){
        return "teacher";
    }
    return false;
    }
    //comprovación de si el usuario ha aceptado la politica de cookies
    function cookiePolicyAccept(){
        if(isset($_SESSION["noCookienoAcces"])){
            if($_SESSION["noCookienoAcces"] != false){
                header("location:?url=home");
            }
        }
    }
