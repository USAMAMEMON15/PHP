<?php
 
$servername =  "localhost" ;
$username   =  "root" ;
$password   =  ""           ;
$dbname     =  "exams" ;

$conn = mysqli_connect($servername , $username , $password ,$dbname);

if(!$conn){
    die("Connection Has Been Failed");
}

?>