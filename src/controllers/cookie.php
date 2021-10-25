<?php
$option = filter_input(INPUT_POST,"option");
if($option == "Accept"){
    setcookie("cookiesEnabled", true, 0, "/", "localhost");
    $_SESSION["noCookienoAcces"]=false;
    header("location:?url=home");
}elseif($option == "Decline"){
    $_SESSION["noCookienoAcces"]=true;    //si no hay cookies no hay acceso a la página
    setcookie("cookiesEnabled", false, 0, "/", "localhost");
    header("location:?url=home");
}
