<?php
$error="";
$x="";
$y="";
$result="";
if(isset($_GET["operation"])){
    $x=$_GET["num1"];
    $y=$_GET["num2"];
    $op=$_GET["operation"];}

    if(is_numeric($x) && is_numeric($y)){
        switch($op){
            case 'add': $result=$x + $y; break;
            case 'sub': $result=$x - $y; break;
            case 'pro': $result=$x * $y; break;
            case 'div': $result=$x / $y; break;
        }
    }
else{
    $error="ENTER NUMBER FIRST";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Calculator</title>
    <link rel='stylesheet' type='text/css' media='screen' href='calculator.css'>
</head>
<body>
    <h1>A Simple Calculator</h1>
    <h2><?=$error?></h2>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
<!--Number 1-->
<div>
    <label for="num1"> ENTER NUMBER 1 </label>
    <input type="number" name="num1" id="num1" value="<?= $x?>">
</div>
<!--Number 2-->
<div>
    <label for="num2"> ENTER NUMBER 2 </label>
    <input type="number" name="num2" id="num2" value="<?= $y?>">
</div>
<!-- Result -->
<div>
    <label for="result"> RESULT </label>
    <input type="number" id="result" value="<?= $result?>" disabled>
</div>
<!--Operation-->
<div>
   <input type="submit" value="add" name="operation"> 
   <input type="submit" value="sub" name="operation"> 
   <input type="submit" value="pro" name="operation"> 
   <input type="submit" value="div" name="operation"> 
</div>
   </form> 
</body>
</html>