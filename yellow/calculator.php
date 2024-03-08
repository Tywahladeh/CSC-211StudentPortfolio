<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $operator=$_POST['operator'];
    $result=0;

    switch($operator){
        case 'add':
            $result=$num1+$num2;
            break;
        case 'subtract':    
            $result=$num1-$num2;
            break;
        case 'multiply':
            $result=$num1*$num2;
            break;
            case 'divide':
                if(num2 !=0){
                    $result=$num1/$num2;
                }else{
                    echo"Error:Cannot divide by zero!";
                    exit;
                }  
                break;
    }
    echo "Result:" .$result;
}
?>