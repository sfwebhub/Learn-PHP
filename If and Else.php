<?php

//PHP if Operators

//Comparison Operators
/*
if (5 > 3) {
    echo "5 is greater than 3!";
  }
echo "\n";

  if (6 < 10) {
    echo "6 is less than 10!";
  }

  echo "\n";

  $age=15;
  
  if ($age < 20){
    echo "Boy name is Farhan";
  }

  echo "\n";

  if ($age > 10){
    echo "The boy name is Shuvro";
  }
echo"\n";

  $N = 14;

if ($N == 14) {
  echo "all are equal";
}

echo "\n";

$x = 100;  
$y = 100;

if ($x >= $y) {
  echo "$x is greater than, or equal to $y";
}

echo "\n";

$a = 100;  
$b = 100;

if ($b <= $a) {
  echo "$b is less than, or equal to $a";
}


echo "\n";
//Logical Operators

$a1 = 200;
$b1 = 33;
$c1 = 500;

if ($a1 > $b1 && $a1 < $c1 ) {
  echo "Both conditions are true";
}
*/
/* $a = 6;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
*/

//PHP if...else Statements

 /* 
 $time = date("H");

if ($time < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo"\n";

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
} */

//Short Hand If
/*
$a = 5;

if ($a < 10) $b = "Hello";

echo $b;

echo"\n";

$x = 13;

$y = $x < 10 ? "Hello" : "Good Bye";

echo $y;  */


//PHP Nested if Statement

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
