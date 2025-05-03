<?php

 
  include ("./four(4).php");
  
$sql = "update student set name = 'jerry' where id = 2";
  $result = $conn->query($sql);
  
   if($result == true){
    echo "record sumbit";
   }
  
  ?>