<?php


  include ("./four(2).php");
  
  $sql = "select * from student";
  $result = $conn->query($sql);

  echo "<pre>";
  print_r ($result);
  
  if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo"<pre>";
        print_r($row);
    }
  }

?>
