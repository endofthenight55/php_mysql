<?php



$school = "Digital School"; //string


echo "I love $school";
   echo "<br>";
echo strlen($school);
 echo "<br>";


 echo str_word_count("Digital School");
 echo "<br>";



 $name = "Hello";
 echo strrev($name);
 echo "<br>";



$programming = "Programming is not cool";
echo str_replace("not","very",$programming);
 echo "<br>";


$x = 6;
$y = 3;


echo $x + $y;
 echo "<br>";
 echo $x - $y;
  echo "<br>";
 echo $x / $y;
  echo "<br>";
 echo $x * $y;
  echo "<br>";


  echo $x % $y;

  echo "<br>";
$num = 4;
  if ($num > 0)
    echo "$num is greater than 0";

//IF CONDITION
$num = 4;
if($num > 0) {
    echo "$num is greater than 0";
}


echo "<br>";
// IF ELSE


$age = 16;


if ($age > 18){
    echo "You are an adult";
}else {
    echo "You are under 18";
}


// IF ELSEIF
echo "<br>";
$number = 5;
if ($number < 0) {
    echo "The value of $number is a negative number";
}elseif($number == 0) {
    echo "The value of $number is a zero.";
}else {
    echo "The value of $number is a positive number";
}
 echo "<br>";
$x = 10;
$y = 20;

if ($x == $y){
    echo "$x and $y are equal.";
} else{
    echo "$x and $y are not equal.";
}

echo "<br>";
$day = "Monday";
switch($day) {
    case "Monday":
        echo "It's Monday! Start of the week";
        break;
    case "Tuesday":
        echo "It's Tuesday! Keep pushing through";
        break;


    case "Wednesday":
        echo "It's Wednesday! Keep pushing through";
        break;
    default:
     echo "Invalid day";
     break;
    echo "<br>";
}


//Loops


//While loop
$x = 1;
while($x <=5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<br>";
echo "<br>";
echo "<br>";



//Do - while
$y = 1;
do {
  echo "The number is: $y <br>";
  $y++;  
}while($y >5);



// for loop
echo "<br>";
echo "<br>";
echo "<br>";
for($x=0; $x <=10 ; $x++) {
    echo "The number is :$x <br>";
}


//foreach loop


$cars = ["BMW","Audi","Ferrari","VW"];

$age = array("John" => 18, "Michael" => 20, "Joe" => 13);


 foreach($age as $key => $value){
    echo "$key = $value  <br>";
 }
 
?>