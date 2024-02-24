<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Caculator</title>
</head>
<body>
    <form>
<div>
<!--first input-->
<input type="text" name="num_1" placeholder="Input your first number"><br>
    <!--second input-->
    <input type="text" name="num_2" placeholder="Input your second number">
    <!--operator-->
    <select name="operator" id="">
        <option value="None"></option>
        <option value="Add">+</option>
        <option value="Sub">-</option>
        <option value="Div">/</option>
        <option value="Pro">*</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</div>

    </form>
    <?php
    if(isset($_GET['submit'])) {
    $result1=$_GET['num_1'];
    $result2=$_GET['num_2'];
    $operator=$_GET['operator'];
    switch($operator){
        case"None":
            echo"You need to select a method";
            break;
        case"Add":
            echo $result1 + $result2 ;
            break;
        case"Sub":
            echo $result1 - $result2 ;
            break;
        case"Div":
            echo $result1 / $result2 ;
            break;
        case"Pro":
            echo $result1 * $result2 ;
            break;
    }
    }
    ?>
</body>
</html>