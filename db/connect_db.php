<?php

try{
    $pdo = new PDO('mysql:host=x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=nskcd7ez24sy0di','ai0vr6bo086by6zj','n6vsvmnxyei4uueo');
    //echo 'Connection Successfull';
}catch(PDOException $error){
    echo $error->getmessage();
}
?>
