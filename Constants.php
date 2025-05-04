<?php


define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

const MYCAR = "Volvo";
echo MYCAR;


define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[1];



  define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();