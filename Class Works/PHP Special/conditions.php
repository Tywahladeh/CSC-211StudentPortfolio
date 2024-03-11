<?php
$currenttime=time();
echo "The current time is: ".$currenttime ."<br>";
while($currenttime<set_time_limit(300))
{
    $currenttime++;
}
echo "The new time is: $currenttime";
?>

<?php
$i = 0;
$num = 50;
while($i < 10)
{
    $num--;
    $i++;
    echo " i=", $i, " num", $num, " <br>";
}
echo ("loop stopped at i = $i and num = $num");