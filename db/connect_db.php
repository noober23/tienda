<?php

try{
    $pdo = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_d30f5750dcaa00c','b3db54c600f352','45b0b4df');
    //echo 'Connection Successfull';
}catch(PDOException $error){
    echo $error->getmessage();
}


?>
