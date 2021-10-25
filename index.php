<?php
session_start();
 //establecer errores
 ini_set('display_errors', 'On');
require 'config.php';
require APP.'/src/route.php';




$controller=getRoute();
require APP.'/src/controllers/'.$controller.'.php';



  /*
  try{
       $stmt=$gdb->prepare("select * from users");
       $stmt->execute();
       /**while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          print($row['username']."<br>");
       }
       /**
        * 
        **

        $rows = $stmt->fetchAll();
        foreach($rows as $row){
            //secho render($row);
             echo $row['username']."<br>";
             
        }
        /**
    * $stmt = $gdb->prepare("INSERT INTO users(username,passwd) values (?,?)");
    * $stmt->bindParam(1,$usr);
    * $stmt->bindParam(2,$pass);
   *  //ejecución
  *   $stmt->execute();
      **
  }catch(PDOException $e){
      echo $e->getMessage();
  }
  */
  //$route=getRoute();
  //var_dump($route);
  //echo render($route,["nom"=>"SCHOOL"]);
  
     //$gdb->query();
     //$gdb->exec();


