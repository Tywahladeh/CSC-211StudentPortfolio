
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the values from the form
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operator = $_POST["operator"];

  // Perform the calculation based on the operator
  switch ($operator) {
    case "+":
      $result = $num1 + $num2;
      break;
    case "-":
      $result = $num1 - $num2;
      break;
    case "*":
      $result = $num1 * $num2;
      break;
    case "/":
      if ($num2 == 0) {
        $error = "Division by zero is not allowed.";
      } else {
        $result = $num1 / $num2;
      }
      break;
    default:
      $error = "Invalid operator.";
  }
}

?>