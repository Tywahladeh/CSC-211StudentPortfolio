<?php
$cookie_name1="num";
$cookie_value1="";
$cookie_name2="op";
$cookie_value2="";

if(isset($_POST['num']))
{
    $num=$_POST['input'].$_POST['num'];
}
else{
    $num="";
}
if(isset($_POST['op'])){
    $cookie_value1=$_POST['input'];
    setcookie($cookie_name1,$cookie_value1,time()+(86400*30), "/");

    $cookie_value2=$_POST['op'];
    setcookie($cookie_name2,$cookie_value2,time()+(86400*30), "/");
    $num="";
}
if(isset($_POST['equal'])){
    $num=$_POST['input'];
    switch($_COOKIE['op']);{
        case"+"
        $result=$cookie['num']+$num;
        break;
        case"-"
        $result=$cookie['num']+$num;
        break;
        case"*"
        $result=$cookie['num']+$num;
        break; case"/"
        $result=$cookie['num']+$num;
        break;
    }
}

?>
<!DOCTYPE html>
<html>
 <head>
<meta charset="UTF-8">
<title>Calculator</title>
<style>
    body{
        background-color: rgb(163, 159, 159);
    }
    .maininput{
        color: whitesmoke;
    font-size: 80px;
    }
.calc{
    margin:auto;
    background-color: bisque;
    border: 2px solid black;
    width: 25%;
    height: 550px;
    border-radius: 25px;
    box-shadow: 10px 10px 40px ;
}
.maininput{
    background-color: black;
    border: 1px solid grey;
    height: 115px;
    width: 98.2%;

} 
.numbtn{
    padding: 30px 35px;  
    border-radius: 25px; 
    font-weight: 600;
    font-size: x-large;
    background-color: aquamarine;
} 
.calbtn{
    padding: 30px 35px;
    border-radius:25px ;
    font-weight: 600;
    font-size: x-large;
    background-color: red;
}
.C{
    padding: 30px 35px;
    border-radius:25px ;
    font-weight: 600;
    font-size: x-large;
    background-color: orange;
}
.equal{
    padding: 30px 35px;
    border-radius:25px ;
    font-weight: 600;
    font-size: x-large;
}
</style>
 </head>
 <body>
<div class="calc">
 <form action=""method="post">
 <br>  
 <input type="text" class="maininput" value="<?phpecho @$num ?>"> <br> <br> 
 <input type="submit" class="numbtn" name="num" value="7">
 <input type="submit" class="numbtn" name="num" value="8">
 <input type="submit" class="numbtn" name="num" value="9">
 <input type="submit" class="calbtn" name="op" value="+"><br>
 <input type="submit" class="numbtn" name="num" value="4">
 <input type="submit" class="numbtn" name="num" value="5">
 <input type="submit" class="numbtn" name="num" value="6">
 <input type="submit" class="calbtn" name="op" value="-"><br> 
 <input type="submit" class="numbtn" name="num" value="1">
 <input type="submit" class="numbtn" name="num" value="2">
 <input type="submit" class="numbtn" name="num" value="3">
 <input type="submit" class="calbtn" name="op" value="*"><br>
 <input type="submit" class="C" name="num" value="C"> 
 <input type="submit" class="numbtn" name="num" value="0">
 <input type="submit" class="calbtn" name="op" value="/">
 <input type="submit" class="equal" name="equal" value="=">
 </form>   
</div>
 </body>   
</html>
