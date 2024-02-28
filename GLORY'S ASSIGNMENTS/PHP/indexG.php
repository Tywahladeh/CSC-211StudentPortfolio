<?php
    $x ="";
    $y ="";
    $result ="";

     if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];     
           $op = $_GET['operation'];
        }

           if(is_numeric($x) && is_numeric($y)){

            switch($op){
                case 'add' : $result = $x + $y;
                break;
    
                case 'sub' : $result = $x - $y;
                break;
    
                case 'pro' : $result = $x * $y;
                break;
    
                case 'div' : $result = $x / $y;
                break;
               }

           }
           ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My - Calculator</title>

    <link rel="stylesheet" type="text/css" href="GCALC.css" />
</head>

<body>



    <fieldset>

    <legend> Simple Calculator </legend>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <!--     FIRST VALUE -->
        <div>
        <label for="num1">Enter the first value</label>
        <input type="number" name="num1" id="num1" value="<?= $x?>">
        </div>
        
        <!--  SECOND VALUE -->
        
        <div>
        <label for="num2">Enter the second value</label>
        <input type="number" name="num2" id="num2" value="<?= $y?>">
        </div>
        
        <!-- RESULT -->
        <div>
        <label for="result">Result</label>
        <input type="number" id="result" value="<?= $result?>" disabled>
        </div>
        
        <!-- OPERTIONS -->
        <div>
        <input type="submit" value="add" id="input" name="operation">
        <input type="submit" value="sub" id="input" name="operation">
        <input type="submit" value="pro" id="input" name="operation">
        <input type="submit" value="div" id="input" name="operation">
        </div>

</form>
</fieldset>

</body>
</html>