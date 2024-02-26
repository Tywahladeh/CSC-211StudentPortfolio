<?php
$result = ""; 
if(isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];


    if(is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case "addition":
                $result = $num1 + $num2;
                break;

            case "subtraction":
                $result = $num1 - $num2;
                break;

            case "multiplication":
                $result = $num1 * $num2;
                break;

            case "division":
                if($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            
            default:
               $result = "Select a valid operator";
        }
    } else {
        $result = "Enter valid numbers";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Calculator.css">
    <title>Calculator</title>
</head>
<body>
    <div class="calculator">
        <h3 >CALCULATOR</h3>
        <form action="new.php" method="POST">

            <input type="text" name="num1" placeholder="First Number">
            <input type="text" name="num2" placeholder="Second Number">

            <select name="operator">
                <option value="">Operator</option>
                <option value="addition">ADD</option>
                <option value="subtraction">SUB</option>
                <option value="multiplication">MUL</option>
                <option value="division">DIV</option>
            </select> <br>
            <input id="submit" type="submit" name="submit">

            <h5>YOUR ANSWER: <br> <br>  <span> <?php   echo @$result;?> </span> </h5>
        </form>

    </div>
</body>
</html>