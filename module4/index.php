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
 
?>