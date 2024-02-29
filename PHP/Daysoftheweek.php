<?php
$daysoftheweek=date("D");
switch ($daysoftheweek)
{
    case "Mon":
        echo "Today is Monday";
        break;
        case "Tue":
            echo "Today is Tuesday";
            break;
            case "Wed":
                echo "Today is Wednesday";
                break;
                case "Thur":
                    echo "Today is Thursday";
                    break;
                    case "Fri":
                        echo "Today is Friday";
                        break;
                        case "Saturday":
                            echo "Today is Saturday";
                            break;
                            case "Sun":
                            echo "Today is Sunday";
                            break;
                            default:
                            echo "Wonder which day is this?";
}
?>