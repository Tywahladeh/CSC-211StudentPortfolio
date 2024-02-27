
<?php
$dayoftheweek=date("D");
switch ($dayoftheweek) 
{
case "Mon":
echo" Today is monday";
break;
case "Tue":
echo" Today is tuesday";
break;
case "Wed":
echo" Today is Wednesday";
break;
case "Thu":
echo" Today is thursday";
break;
case "Fri":
echo" Today is Friday";
break;
case "Sat":
echo" Today is Saturday";
break;
case "Sun":
echo" Today is Sunday";
break;
default:
echo "Wonder which day is this?";
}
?>