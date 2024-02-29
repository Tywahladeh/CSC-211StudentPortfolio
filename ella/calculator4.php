<?php
if(isset($_POST['calculate'])){
  $num1=$_POST['num1'];
  $num2=$_POST['num2'];
  $operator=$_POST['operator'];
  if(!empty($num1)&& !empty($num2)){
    switch($operator){
      case'+':
        $result=$num1+$num2;
        break;
      case'-':
          $result=$num1-$num2;
          break;
      case'*':
          $result=$num1*$num2;
          break;
      case'/':
        $result=$num1/$num2;
        break;
        default:
        $result="invalid operator";  
    }
    echo"<p>Result:$result</p>";
  }
  else{
    echo"<p>please enter both numbers</p>";
  }
}
?>