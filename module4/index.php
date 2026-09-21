<?php


 //phpinfo();
 $x = "hello";
 print_r($x);
 
  echo "<br>";

 $a = 5;
 echo gettype($a) . "<br>";

 $b = 5.5;
 echo gettype($b) . "<br>";

 $a = "hi";
 echo gettype($a) . "<br>";

 function display(){
    echo "this is PHP version:" . phpversion();
    echo "<br>";

 }

 display();

 function hello(){
    echo "hello";
    echo "<br>";
 }

hello();

 function sum(){
    $value = 120 + 20;
    echo $value;
    echo "<br>";
 }

 sum();

 function shuma($x,$y){
    $value = $x + $y;
    echo $value;
 }
 shuma(2,4);

echo "<br>";

 function maximum($a,$b){
    if ($a > $b){
        return $a;
    } else{
        return $b;
    }
 }

 $a = 10;
 $b = 30;
 $test = maximum($a, $b);
 echo "The max of $a and $b is: $test";
 echo "<br>";

function localVariable() {
    $h = 10; // local variable
    //echo $z;
    echo $h;



}


localVariable();


echo "<br>";

function callCounter(){
    static $count = 0;
    $count++; //1
    echo "The value of count is: $count";
    echo "<br>";
}


callCounter(); //count=1
callCounter();
echo "<br>";
echo "<br>";
echo "<br>";
 


//Arrays

//$sports = array("football", "voleyball", "basketball", "tennis");
$sports = ["football", "voleyball", "basketball", "tennis", "handball", "running"];

echo $sports [0];
echo "<br>";
echo end ($sports);
echo "<br>";
echo count($sports);
echo "<br>";

array_push($sports, "skiing");
array_unshift($sports, "golf");

echo "<br>";
echo count($sports);
echo "<br>";


for($i=0; $i<8; $i++){
   echo $sports[$i]  . " ";
   
}

array_shift($sports); // - removes the first item
array_pop($sports);  //- removes the last item
echo "<br>";
echo "<br>";
for($i=0; $i<6; $i++){
   echo $sports[$i]  . " ";
   
}

echo "<br>";
var_dump($sports);


$output1 = array_slice($sports,2);
$output2 = array_slice($sports,0,3);
echo "<br>";
var_dump($output1);
echo "<br>";
var_dump($output2);


?>

