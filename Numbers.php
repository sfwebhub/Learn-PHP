<?php

//integer
//An integer is a number without any decimal part.


 /*$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

$x=58658;
var_dump(is_integer($x));

$y =58.658;
var_dump(is_int($y)); */


//Float

/* $w = 10.365;
var_dump(is_float($w)); */

//Infinity
/* $q = 1.9e411;
var_dump($q); */




//PHP NaN

 /* $x = acos(8);
var_dump($x);  */


//PHP Numerical Strings



 /* $x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));  */



//PHP Casting Strings and Floats to Integers

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;