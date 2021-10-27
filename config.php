<?php
require 'environment.php';


if(ENVIRONMENT == 'development'){
    define("BASE_URL","localhost");
    $config = array(
        'dbname' => 'mvc',
        'host' => 'localhost',
        'user' => 'root',
        'password' => ''
    );
    extract($config);
   
    
}else if(ENVIRONMENT == "production"){
    ddefine("BASE_URL","localhost");
    $config = array(
        'dbname' => 'mvc',
        'host' => 'localhost',
        'user' => 'root',
        'password' => ''
    );
    extract($config);
}
global $db;
try{
    $db = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$password);

}catch(PDOException $e){
  echo $e->getMessage();
}