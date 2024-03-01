<?php

    if(isset($_GET['operation'])){
        $x=$_GET['num1'];
        $y=$_GET['num2'];
        $op=$_GET['operation'];


        switch ($op) {
            case 'add': $result= $x + $y;
                break;
            case 'minus': $result= $x - $y;
                break;
            case 'product': $result= $x * $y;
                break;
            case 'divide': $result= $x / $y;
                break;
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>victor's calculator</title>
    <style>
        body{
            background-color: green;
        }

        .cal{
            margin: auto;
            background-color: black, transparent;
            border: 2px solid whitesmoke;
            width: 20%;
            height: 600px;
            border-radius: 40px;
            font-family: "Montserrat regular", sans-serif;
            
        
        }
       .add{
    
            padding: 50px;
            border-radius: 50px;
            
            font-weight: 500;
            font-size: 30px;
            background-color: blue;
       }
       .add:hover{
        background-color: white;
       }
       .sub{
    
    padding: 50px 35px;
    border-radius: 50px;
    font-weight: 500;
    font-size: 30px;
    background-color: yellow;
}
.sub:hover{
        background-color: white;
       }
.pro{
    
    padding: 50px 35px;
    border-radius: 50px;
    font-weight: 500;
    font-size: 30px;
    background-color: purple;
}
.pro:hover{
        background-color: white;
       }
.div{
    
    padding: 50px 35px;
    border-radius: 50px;
    font-weight: 500;
    font-size: 30px;
    background-color: red;
}
.div:hover{
        background-color: white;
       }



       num{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 30px;
            background-color: blue;
       }

        
        .operation{
            display: grid;
        }
        .first{
            border-radius: 100px;
                  
        }

        .number{
            border-radius: 50px;
        }
    </style>

</head>
<body>
    

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

    <div class="cal">

    <div class="first">
        <label for="num1">First number</label>
        <input type="number" name="num1" id="num1" value="<?= $x ?>">
    </div>

    <div class="second">
        <label for="num2">Second Number </label>
        <input type="number" name="num2" id="num2" value="<?= $y ?>">
    </div>

    <div class="answer">
        <label for="result">Result</label>
        <input type="number" id="result" value="<?= $result?>" disabled>
    </div>


    <div class="operation">
       <input type="submit" class="add" value="add" name="operation">
       <input type="submit" class="sub" value="minus" name="operation">
       <input type="submit" class="pro" value="product" name="operation">
       <input type="submit" class="div" value="divide" name="operation">
    </div>
    </div>

    </form>
</body>
</html>


