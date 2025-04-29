<?php

 /*
 $x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 


myTest();

echo "<p>Variable x outside function is: $x</p>";  */

function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";