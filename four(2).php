<?php

 include ("./four(1).php");


 $date = date( "y-m-d h:i:s");

 $sql ="insert into student (name ,email,password ,created_at) values
 ('shayan','shayan15@gmail.com','112','$date')";

 $result = $conn->query($sql);
 if($result ==true){
    echo "<h1>record has been submit</h1>";
 }
 

 

?>