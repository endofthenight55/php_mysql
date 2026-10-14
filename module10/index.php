<?php

$host = 'localhost';
$user = 'root';
$db = "db";
$pass = '';

try{
    $conn = new PDO("mysql:host=$host;dbname=$db" , $user , $pass);

    //$username = "Sara";
    //$password = password_hash("12345678", PASSWORD_DEFAULT);

    //$sql = "INSERT INTO test (username, password) VALUES ('$username ','$password')";
    //$conn->exec($sql);


    //echo "INSERTED";

    //$sql = "ALTER TABLE test ADD email VARCHAR(225)";
    //$sql = "ALTER TABLE test DROP COLUMN email";
    $sql = "DROP TABLE user";

    $conn->exec($sql);

    echo"alterd";

    


    

}catch(Exception $e){

   echo "Not connected".$e->getMessage();

}


?>