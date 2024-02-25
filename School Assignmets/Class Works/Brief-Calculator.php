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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        
        body{
            background-color: rgb(163, 159, 159);
            font-family: sans-serif;
        }
       
        .calc{
            margin: auto;
            background-color: white;
            width: 30%;
            height: 610px;
            border-radius: 10px;
            box-shadow: 10px 10px 40px;
            justify-content:center;
            align-items:center;
        }
        .maininput{
            background-color: black;
            height: 130px;
            width: 95%;
            font-size: 80px;
            padding: auto;
            color: white;
            font-weight: 100;
            margin-left: 7px;
            border-radius: 10px;
        }
        .numbtn{
            margin-left: 12px;
            padding: 30px 35px;
            border-radius: 10px;
            font-weight: 500;
            font-size: large;
            background-color: rgb(155, 154, 154);
        }
        .numbtn:hover{
            background-color: rgb(136, 133, 133);
            color: whitesmoke;
        }
        .calbtn{
            margin-left: 9px;
            padding: 30px 35px;
            border-radius: 10px;
            font-weight: 500;
            font-size: large;
            background-color: orange;
        }
        .calbtn:hover{
            background-color: rgb(211, 140, 7);
            color: whitesmoke;
        }
        .c{
            margin-left: 10px;
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: bold;
            font-size: large;
            background-color: red;
        }
        .c:hover{
            background-color: rgb(188, 16, 16);
            color: whitesmoke;
        }
        .equal{
            margin-left: 10px;
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: rgb(8, 181, 8);
        }
        .equal:hover{
            background-color: green;
            color: whitesmoke;
        }

    </style>
</head>
<body>
        <div class="calc">
            <form action="" method="post">
                <br>
                <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br> <br>
                <input type="submit" class="numbtn" name="num"value="7">
                <input type="submit" class="numbtn" name="num"value="8">
                <input type="submit" class="numbtn" name="num"value="9">
                <input type="submit" class="calbtn" name="op"value="+"> <br><br>
                <input type="submit" class="numbtn" name="num"value="4">
                <input type="submit" class="numbtn" name="num"value="5">
                <input type="submit" class="numbtn" name="num"value="6">
                <input type="submit" class="calbtn" name="op"value="-"><br><br>
                <input type="submit" class="numbtn" name="num"value="1">
                <input type="submit" class="numbtn" name="num"value="2">
                <input type="submit" class="numbtn" name="num"value="3">
                <input type="submit" class="calbtn" name="op"value="*"><br><br>
                <input type="submit" class="c" name="clear"value="c">
                <input type="submit" class="numbtn" name="num"value="0">
                <input type="submit" class="equal" name="equal"value="=">
                <input type="submit" class="calbtn" name="op"value="/">
            </form>
        </div>



</body>
</html>
