<?php

    if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];

        switch($op){
            case '+': $result = $x + $y;
                break;
            case '-': $result= $x - $y;
                break;
            case '*': $result= $x * $y;
                break;
            case '/': $result= $x / $y;
                break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Calculator</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_ SELF'] ?>"method="get">
    <!--Number 1-->
    <div>
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" value="<?= $x ?>"> 
    </div>
    <!--Number 2-->
    <div>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num1" value="<?= $y ?>"> 
    </div>
    <!--Result-->
    <div>
        <label for="result">Result</label>
        <input type="number" id="result" value="<?=$result?>" disabled> 
    </div>
    <!--Operation-->
    <div>
        <input type="submit" value="+" name="operation">
        <input type="submit" value="-" name="operation">
        <input type="submit" value="*" name="operation">
        <input type="submit" value="/" name="operation">
    </div>
</body>
</html>