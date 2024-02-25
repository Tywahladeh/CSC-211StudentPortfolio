<?php
$dayotheweek=date("D");
switch ($dayotheweek)
{
    case "Mon";
    echo "Today is Monday";
     break;
    case"Tue":
        echo "Today is Tuesday";
        break; 
        case "Wed":
            echo "Today is Wednesday";
            break;
            case "Thur"
            echo "Today is Thursday";
            break; 
            case "Fri"
            echo "Today is Friday";
            break;
            case "Satr"
            echo "Today is Saturday";
            break;
            case "Sunday"
            echo "Today is Sunday";
            break;
            default:
            echo "wonder which day is this";

            
}