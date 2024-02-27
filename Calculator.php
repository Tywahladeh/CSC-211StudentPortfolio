<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST['num']))
    {
     $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*":
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/":
                            $result=$_COOKIE['num']/$num;
                            break;
        }
        $num=$result;
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <input type="text" class="display" id="result" value="<?php echo $result; ?>" readonly>
        <button onclick="appendNumber('7')" class="button operator">7</button>
        <button onclick="appendNumber('8')" class="button operator">8</button>
        <button onclick="appendNumber('9')" class="button operator">9</button>
        <button onclick="appendOperator('/')" class="button operator">/</button>
        <button onclick="appendNumber('4')" class="button number">4</button>
        <button onclick="appendNumber('5')" class="button number">5</button>
        <button onclick="appendNumber('6')" class="button number">6</button>
        <button onclick="appendOperator('*')" class="button operator">*</button>
        <button onclick="appendNumber('1')" class="button number">1</button>
        <button onclick="appendNumber('2')" class="button number">2</button>
        <button onclick="appendNumber('3')" class="button number">3</button>
        <button onclick="appendOperator('-')" class="button operator">-</button>
        <button onclick="appendNumber('0')" class="button number">0</button>
        <button onclick="clearDisplay()" class="button clear">C</button>
        <button onclick="calculate()" class="button equal">=</button>
        <button onclick="appendOperator('+')" class="button operator">+</button>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php

// Optional server-side logic (e.g., form submission handling)

?>

