<?php

// 1.PHP while Loop

/*
$i = 1;
while ($i < 10) {
  echo $i;
  $i++;
} */

//The break Statement
/*
$i = 1;
while ($i < 6) {
  if ($i == 5) break;
  echo $i;
  $i++;
}
  */

  //The continue Statement

 /*  $i = 0;
while ($i < 8) {
  $i++;
  if ($i == 3) continue;
  echo $i;
} */

//Alternative Syntax

/*
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile; */

//Step 10
/*
$i = 0;

while ($i < 100) {
  $i+=20;
  echo "$i<br>";
}  */

//2.PHP do while Loop
/*
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6); */

//The break Statement
/*
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);  */

//The continue Statement
/*
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);  */


//PHP for Loop -The for loop - Loops through a block of code a specified number of times.
/*
for ($x = 0; $x <= 20; $x++) {
    echo "The number is: $x <br>";
  } */

  //The break Statement

/*
  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }
 */

 //The continue Statement
/*
 for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
  }  */

  //Step 10
  /*
  for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  } */

  //The foreach Loop on Arrays
/*
  $colors= array ("red", "green", "blue", "drak");

  foreach ($colors as $x){
    echo "$x";
  }  */

  //Keys and Values

/*
  
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
} */

//The foreach Loop on Objects
/*
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
  }

  */
  //The break Statement
/*
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
} */

//The continue Statement

/* $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
} */

//Foreach Byref

/*

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);         */

//Alternative Syntax
/*
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;  */

//PHP Break
/*
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  } */

  //Break in While Loop

  /*  $x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
  */

  //Break in Do While Loop

  /*  $i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);  */

//Break in For Each Loop

/* $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
} */

//  PHP Continue

//Continue in For Loops
/*
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  } */

  //Continue in While Loop

  /*  $x = 0;

while($x < 10) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
  */
  //Continue in Do While Loop

  /*  $i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

*/

//Continue in For Each Loop

/*  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
} */
