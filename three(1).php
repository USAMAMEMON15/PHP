<?php

 $servername ="localhost";
 $username ="root";
 $password ="";
 $dbname ="usama";

 $conn =mysqli_connect( $servername , $username , $password,$dbname);

 if($conn){
    echo "connection have been successful!";
 }


?>