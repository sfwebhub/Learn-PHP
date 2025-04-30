//PHP has a set of built-in functions that you can use to modify strings.



<?php

//Upper Case

/*
$x= "Farhan";
echo strtoupper($x);

$y = "Faria";
echo strtoupper ($y);
*/

//Lower Case

/* $x="Faria";

echo strtolower ($x); */

//Replace String

/* $x = "Farhan Ahmed";
echo str_replace("Farhan", "Faria", $x);
*/

//Reverse a String -The PHP strrev() function reverses a string.

$x = "Farhan";
echo strrev($x);

//Remove Whitespace -The trim() removes any whitespace from the beginning or the end:

$y = " Hello World! ";
echo trim($y);


//Convert String into Array -The PHP explode() function splits a string into an array.

$z ="Hello Faisal";
$q = explode (" " , $z );

print_r ($q);