<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="num1" placeholder="Enter first number" required>
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="text" name="num2" placeholder="Enter second number" required>
    <input type="submit" value="Calculate">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    // Perform calculation based on the selected operator
    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            // Check if dividing by zero
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
    
        default:
            $result = "Invalid operator";
            $echo;
    }

    // Display the result
    echo "<p>Result: $result</p>";
}
?>

</body>
</html>