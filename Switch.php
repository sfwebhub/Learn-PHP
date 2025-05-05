<?php

//The break keyword breaks out of the switch block
//The default code block is executed if there is no match

$favcolor = "Blue";

switch ($favcolor){
    case "Red" :
        echo "Your favorite color is Red";
        break;
     case "Blue" :
        echo "Your favorite color is Blue";
        break;
        case "Grean" :
            echo "Your favorite color is Green";
            break;
            default:
            echo "Your favorite color is neither Red, Blue, Green";   
}