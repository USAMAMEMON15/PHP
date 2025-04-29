<?php
 
 include("./three(1).php");

 $date = date( "y-m-d h:i:s");

 $sql ="insert into student (name ,email,password ,created_at) values
 ('usama','usama15@gmail.com','1245','$date')";

 $result = $conn->query($sql);
 if($result ==true){
    echo "<h1>record has been submit</h1>";
 }
 
?>