<?php

$string1 = "";
$string2 = "";
$resultEqual = "";
$resultNotEqual = "";
$resultGreater = "";
$resultLess = "";
$resultGreaterEqual = "";
$resultLessEqual = "";

if (isset($_POST['submit'])) {
    
    $string1 = isset($_POST['string1']) ? $_POST['string1'] : "";
    $string2 = isset($_POST['string2']) ? $_POST['string2'] : "";

    
    $resultEqual = $string1 == $string2;
    $resultNotEqual = $string1 != $string2;
    $resultGreater = $string1 > $string2;
    $resultLess = $string1 < $string2;
    $resultGreaterEqual = $string1 >= $string2;
    $resultLessEqual = $string1 <= $string2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relational Operators</title>
</head>
<body>
    <h3>Relational Operators</h3>

    <form action="" method="post">
        <label for="string1">Enter String 1:</label>
        <input type="text" name="string1" id="string1" value="<?php echo $string1; ?>" required> <br> <br>

        <label for="string2">Enter String 2:</label>
        <input type="text" name="string2" id="string2" value="<?php echo $string2; ?>" required> <br> <br>

        <input type="submit" name="submit" value="Perform">
    </form>

    <p>String 1: <?php echo $string1; ?></p>
    <p>String 2: <?php echo $string2; ?></p>

    <p>  (String1 == String2): <?php echo $resultEqual ? 'true' : 'false'; ?></p>
    <p> (String1 != String2): <?php echo $resultNotEqual ? 'true' : 'false'; ?></p>
    <p> (String1 > String2): <?php echo $resultGreater ? 'true' : 'false'; ?></p>
    <p> (String1 < String2): <?php echo $resultLess ? 'true' : 'false'; ?></p>
    <p> (String1 >= String2): <?php echo $resultGreaterEqual ? 'true' : 'false'; ?></p>
    <p> (String1 <= String2): <?php echo $resultLessEqual ? 'true' : 'false'; ?></p>
</body>
</html>
