<?php


  include ("./four(4).php");
  
$sql = "delete from student  where id  = 2";
  $result = $conn->query($sql);
  
   if($result == true){
    echo "record sumbit";
   }
  
  ?>