<?php


//Slicing-You can return a range of characters by using the substr() function.
//You can return a range of characters by using the substr() function.

/* $x = "Hello World!";
echo substr($x, 6, 5); */

//Slice to the End


/* $x = "Hello World!";
echo substr($x, 6);  */

//Slice From the End -Get the 3 characters, starting from the "o" in world (index -5):

/*  $x = "Hello World!";
echo substr($x, -5, 3);  */

//Negative Length
//From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3).

//Should end up with "ow are y":

$x = "Hi, how are you?";
echo substr($x, 5, -3);



