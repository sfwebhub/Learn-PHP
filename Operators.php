<?php

//1.PHP Arithmetic Operators
/*Addition

$x =5;
$y =10;
echo $x+$y;*/

/*Subtraction
$x =10;
$y =4;
echo $x - $y; */

/*Multiplication

$x =10;
$y =2;
echo $x * $y; */

/*Division

$x =10;
$y =2;
echo $x / $y; */

/* Modulus
$x = 10;  
$y = 6;

echo $x % $y; */

/*Exponentiation

$x = 10;  
$y =4;

echo $x ** $y; */

//2.PHP Assignment Operators

/* $x = 10;  
echo $x; */

//x += y	x = x + y 	Addition

/* $x = 20;  
$x += 100;

echo $x; */

// x -= y	x = x - y	Subtraction

 /*$x = 50;
$x -= 30;

echo $x; */

//x *= y	x = x * y	Multiplication

/* $x =20;
$x *= 30;
echo$x; */

//x /= y	x = x / y	Division

 /* $x = 30;
$x /= 5;
echo$x; */

//x %= y	x = x % y	Modulus

/* $x = 20;
$x %= 7;
echo$x; */

//3.PHP Comparison Operators

// ==	Equal	$x == $y	Returns true if $x is equal to $y

/* $x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal */

//===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type

/*
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal */

//!=	Not equal	$x != $y	Returns true if $x is not equal to $y


/* $x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal */

//<>	Not equal	$x <> $y	Returns true if $x is not equal to $y

/* $x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal */

//!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type

/* $x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal */

// >	Greater than	$x > $y	Returns true if $x is greater than $y

/* $x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y */

//<	Less than	$x < $y	Returns true if $x is less than $y

/* $x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y */

// >=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y

/* $x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y */

//<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y

/* $x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y */

// <=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. 

/*

$/x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y  */

//4.PHP Increment / Decrement Operators

//++$x	Pre-increment	Increments $x by one, then returns $x
/*  $x = 10;  
echo ++$x; */

// $x++	Post-increment	Returns $x, then increments $x by one

/*  $x = 10;  
echo $x++;  */

//--$x	Pre-decrement	Decrements $x by one, then returns $x

/*  $x = 10;  
echo --$x;  */

// $x--	Post-decrement	Returns $x, then decrements $x by one 

/* $x = 10;  
echo $x--;  */

// PHP Logical Operators

/* PHP Logical Operators
The PHP logical operators are used to combine conditional statements.

Operator	Name	Example	Result	
and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x	True if $x is not true */

/*

PHP String Operators
PHP has two operators that are specially designed for strings.

Operator	Name	Example	Result	

.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1 */


/* PHP Array Operators
The PHP array operators are used to compare arrays.

Operator	Name	Example	Result	
+	Union	$x + $y	Union of $x and $y	
==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y  */


/*

PHP Conditional Assignment Operators
The PHP conditional assignment operators are used to set a value depending on conditions:

Operator	Name	Example	Result	
?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	
??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.   */

















