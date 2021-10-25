<?php
function register($db, $username, $email, $pass, $role){
    //antes de nada vamos a encriptar la contraseña
    $encryptVariable = "M7mola";
     $encryptPassword = hash_hmac("sha256",$pass, $encryptVariable);
        $sql = "INSERT into users (email,uname,passw,`role`)values(?,?,?,?)";
       
        
        $stmt=$db->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2,$username);
        $stmt->bindParam(3,$encryptPassword);
        $stmt->bindParam(4,$role );
      
        if($stmt->execute()){
            return true;
        }
       return false;
        
}

function authentication($db, $email, $pass):bool{
    try{
        $sql = "SELECT email, passw FROM users where email='".$email."'LIMIT 1";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //en cada variable guardamos el mail y password
            $getDBmail = $row['email'];
            $getDBpassw = $row['passw'];
        }
        if(isset($getDBmail)){
            //el mail coincide (está definido) entonces ahora procederemos a comprovar la contraseña
            
            $encryptVariable = "M7mola";
            $encryptPassword = hash_hmac("sha256",$pass, $encryptVariable);
            $auth = passwordVerify($encryptPassword,$getDBpassw);

            if($auth){
                return true;
            }
        }
        return false;
    
    }catch(PDOException $e){
        return false;
    }
}

function noRedundancy($db,$email){
    try{
        $sql = "SELECT * FROM users where email='".$email."'";
        $stmt=$db->prepare($sql);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //en cada variable guardamos el mail y password
            if(isset($row)){
                return true;
            }
        }
        return false;
        
    }catch(PDOException $e){
        return false;
    }
}

function getUser($db,$email){
    try{
        $sql = "SELECT uname FROM users where email='".$email."' LIMIT 1";
        $stmt=$db->prepare($sql);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //en cada variable guardamos el mail y password
            $getUsername = $row['uname'];
        }
        return $getUsername;

    }catch(PDOException $e){
        return false;
    }
}

function getProfile($db, $email){
    try{
        $sql = "SELECT * FROM users where email='".$email."' LIMIT 1";
        $stmt=$db->prepare($sql);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //en cada variable guardamos el mail y password
            $getAllData = $row;
        }
        return $getAllData;

    }catch(PDOException $e){
        return false;
    }
}

function getRole($db, $id){
    try{
        $sql = "SELECT * FROM role where id='".$id."';";    //AVISO: role se trata de una vista creada para no tener que hacer consultas y que se vean datos sensibles como passwords, mails, etc
        $stmt=$db->prepare($sql);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data = $row;
        }
        $getRole = roleDefiner($data["role"]);  //returns string (ex.teacher || student)
        return $getRole;

    }catch(PDOException $e){
        return false;
    }
}

