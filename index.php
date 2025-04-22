<?php

 echo"hello world!";
     

   //data types
   $name = "faizan"; //strings
   $age = 10; //integer
   $marks = 7.5; //float
   $iscnic = true; //boolean --> (true n false)

   echo("<br> the name is :" .$name);
   echo("<br> the age is :" .$age);
   echo("<br> the mark is :" .$marks);

   //second method
   echo("<br> the iscnic is :" .$iscnic);

   var_dump(value: $name);
   echo("<br>");
   var_dump(value: $age);
   echo("<br>"); 
   var_dump(value: $marks);
   echo("<br>"); 
   var_dump(value: $iscnic);
   echo("<br>");  

  //arthmetic operations!
  
  $a = 10;
  $b = 50;
  echo("<br> the value a + bs is :".$a+$b);
  echo("<br> the value a - bs is :".$a-$b);
  echo("<br> the value a * bs is :".$a*$b);
  echo("<br> the value a / bs is :".$a/$b);
  echo("<br> the value a % bs is :".$a%$b);

  //comparisson operator
  //< lessthan 
  //> greaterthan
  //== Coparison
  //= arthematic
  //>= lessthan quils to
  //<= greaterthan quils to
  
  //LOGICAL OPARETOR
  //OR !
  //NOT ||
  //AND &&

  
$a = 75;
$b = 50;
$c = false;
echo "hello";

if($a > $b && $c == true){
    echo "<br>you can go<br>";
}
else{
    echo "<br>you can't go<br>";
}
//Increament
//Decreament
//post
//pre

$tree =5;

echo $tree++;
echo "<br>" .$tree;

echo "<br>" .++$tree;

//loop
for($i =1; $i<=10; $i++){
    echo"<br>".$i;
}

//while Loop
$num =10;
while($num<=18){
    echo"<br>while loop".$num;
    $num++;
}
do{
    echo"<br>this is do while".$num;
    $num++;
}
while($num<=23);

$table = 8;
for($t=1; $t<=10;$t++){
    echo"<br>$table x $t =" .$table*$t;
}

// Star pattern
for($w=1; $w<=10; $w++){
    for($e=1; $e<$w; $e++){
        echo"*";
    }
    echo"<br>";
}
?>