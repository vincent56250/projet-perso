<?php 

function bdd(){
    try{
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASSWORD'];     

        
        $bdd = new PDO(
            "mysql:host=".$host.";dbname=".$dbname.";charset=utf8", 
            $user, 
            $pass
        );

    }catch(Exception $e){
        die("Error: " .$e->getMessage());
    } 
        return $bdd;
}
