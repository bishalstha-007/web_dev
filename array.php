<?php
$arr = array(7,9 , "suiii","ronaldo", "running", "winter", 'georgina', 'marcelo') ;
// print_r($arr[1]);  // prints single value of an array

print_r($arr);  // prints whole array
echo "<br>" ;

$last = end($arr);  // last element of an array
echo  "last element of array : $last";
echo "<br>" ;

echo  "first element of array : " .$arr[0];
echo "<br>";

echo "Number of array :".count($arr) ;  // total array element count
echo "<br>";


$info = array(
    "name" => "Bishal Shrestha", 
    "age" => "20",
    "grade" => "Bachelor",
    "faculty" => "CSIT",
    "year" => "second"
);

var_dump($info) ;
echo "<br>" ;

$form_data = array (
    "name" =>"bishal",
    "gender"=> "BSC",
    "hobbies" => array("eating", "reading", "playing", "sleeping", "coding") ,
    "descriptio" => "ABOUT ME"
);

echo "<br>" ;
// print_r($form_data);
var_dump($form_data);

echo "<br>" ;

$a = count($form_data["hobbies"]);
print_r("total counts:$a");

echo "<br>" ;
echo "hobbies:" .count($form_data["hobbies"]); 
?>