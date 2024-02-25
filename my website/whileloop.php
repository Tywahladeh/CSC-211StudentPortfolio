<?php
//while loop to set alarm
$currentrtime=time("h:i:s");
echo "the current time is: $currenttime<br>";
while($currenttime<set_time_limit(300))
{
    $currenttime++;
}
echo "the new time is: $currenttime";
?>