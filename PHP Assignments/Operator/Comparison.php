<?php
// Comparison operators
$result = "";

if (isset($_POST['submit'])) {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2)) {

        $resultEqual = $num1 == $num2;
        $resultNotEqual = $num1 != $num2;
        $resultGreater = $num1 > $num2;
        $resultLess = $num1 < $num2;
        $resultGreaterEqual = $num1 >= $num2;
        $resultLessEqual = $num1 <= $num2;
    } else {
        $result = "Please enter valid numbers";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
    <h3>Comparison Operators</h3>

    <form action="" method="post">
        <label for="num1">Enter Number 1: </label>
        <input type="text" name="num1" id="num1" value="<?php echo isset($num1) ? $num1 : ''; ?>" required> <br> <br>

        <label for="num2">Enter Number 2: </label>
        <input type="text" name="num2" id="num2" value="<?php echo isset($num2) ? $num2 : ''; ?>" required> <br> <br>

        <input type="submit" name="submit" value="Compare Numbers">
    </form>

    <?php if (isset($result) && !empty($result)) : ?>
        <p><?php echo $result; ?></p>
    <?php else : ?>
        <p> (Num1 == Num2): <?php echo $resultEqual ? 'true' : 'false'; ?></p>
        <p> (Num1 != Num2): <?php echo $resultNotEqual ? 'true' : 'false'; ?></p>
        <p> (Num1 > Num2): <?php echo $resultGreater ? 'true' : 'false'; ?></p>
        <p> (Num1 < Num2): <?php echo $resultLess ? 'true' : 'false'; ?></p>
        <p> (Num1 >= Num2): <?php echo $resultGreaterEqual ? 'true' : 'false'; ?></p>
        <p> (Num1 <= Num2): <?php echo $resultLessEqual ? 'true' : 'false'; ?></p>
    <?php endif; ?>
</body>
</html>
