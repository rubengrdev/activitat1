
 let rememberdata = getCookie("rememberdata");

 let sessionStatus = getCookie("status");

   if(rememberdata == 1 && sessionStatus == "innactive"){
    let p = document.querySelector("#time");
    let string = "Visited: " + getCookie("getDate");
    p.innerHTML = string;
   }
  