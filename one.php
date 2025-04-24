<?php
    //Function

$a = 15;
$b = 15;
function hellow ($num1 ,$num2){
    echo "<br>" .$num1 + $num2;
}
hellow($a ,$b);

    //Switch Case
$Day = "usama";
switch($Day) {
    case "Monday" :
        echo"<br> Today is :".$day;
    break;
    case "Tuesday":
        echo"<br> Today is :".$day;
     break;
    case "wednesday":
        echo"<br> Today is :".$day;
    break;
    case "thustday":
        echo"<br> Today is :".$day;
    break;
    case "friday":
        echo"<br> Today is :".$day;
    break;
    case"Saturday":
        echo"<br> Today is :".$day;
    break;
    default:
    echo "<br> DAY  not fond<br>";
}

    //Array Colection of data

$fruit = ["apple","mango","pineapple",];

    //METHOD OF ARRAY
array_push($fruit,"kiwi");
echo $fruit[3];

    //FOREACH LOOP
foreach($fruit as $fruit){
    echo "<br>" .$fruit ;
}

 // Associated Array
 $employe =[
    "empName" => "Riax",
    "empSalary" => "50,000",
    "empGrade" => "A",
    "empMarks" => "80",
 ];
 foreach($employe as $key => $value){
    echo "<br>" .$key ." : ".$value;
 }
 echo "<pre>";
 print_r($employe);
 
   //Multidimensional Array

   $student = [
    ["name" => "usama","Courcs" => "php","Salary" => "50,000"],
    ["name" => "Riaz","Courcs" => "css","Salary" => "50,000"],
    ["name" => "Fayaz","Courcs" => "js","Salary" => "50,000"],
    ["name" => "Junaid","Courcs" => "html","Salary" => "50,000"],
   ];

   //Get an array with  the help of foreach loop
   
   foreach($student as $key => $value){
    foreach($value as $k => $v){
        echo "<br>" .$k ." : " .$v;
    }
    
   }
//   echo "<pre>";
//     print_r($student);


?>