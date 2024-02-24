
<!DOCTYPE html>
<html>
<head>
<title>Simple Calculator</title>
</head>
<body>
<h2>Simple Calculator</h2><form method="POST" action="">
  <input type="number" name="num1" placeholder="Enter the first number" required>
  <br>
  <input type="number" name="num2" placeholder="Enter the second number" required>
  <br>
  <select name="operation" required>

    <option value="">Select an operation</option>
    <option value="addition">Addition</option>
    <option value="subtraction">Subtraction</option>
    <option value="multiplication">Multiplication</option>
    <option value="division">Division</option>
  </select>
  <br>
  <input type="submit" name="calculate" value="Calculate">

</form>
<?php
if(isset($_POST['calculate'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operation = $_POST['operation'];
  
  switch($operation){
    case 'addition':
      $result = $num1 + $num2;
      break;
    case 'subtraction':
      $result = $num1 - $num2;
      break;
    case 'multiplication':
      $result = $num1 * $num2;
      break;

    case 'division':
      if($num2 != 0){
        $result = $num1 / $num2;
      } else {
        $result = "Cannot divide by zero";
      }
      break;
    default:
      $result = "Invalid operation selected";
      break;
  }
  
  echo "Result: $result";
}
?></body>
</html>
