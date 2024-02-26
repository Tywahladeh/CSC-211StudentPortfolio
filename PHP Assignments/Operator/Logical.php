<?php

$condition1 = "";
$condition2 = "";
$resultAnd = "";
$resultOr = "";
$resultNot1 = "";
$resultNot2 = "";

if (isset($_POST['submit'])) {

    $condition1 = isset($_POST['condition1']) ? $_POST['condition1'] : false;
    $condition2 = isset($_POST['condition2']) ? $_POST['condition2'] : false;

    // Perform logical operations
    $resultAnd = $condition1 && $condition2;
    $resultOr = $condition1 || $condition2;
    $resultNot1 = !$condition1;
    $resultNot2 = !$condition2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <h3>Logical Operators</h3>

    <form action="" method="post">
        <label for="condition1">Enter Condition 1 (true/false): </label>
        <input type="text" name="condition1" id="condition1" value="<?php echo $condition1; ?>" required>

        <label for="condition2">Enter Condition 2 (true/false): </label>
        <input type="text" name="condition2" id="condition2" value="<?php echo $condition2; ?>" required>

        <input type="submit" name="submit" value="Perform Logical Operations">
    </form>

    <p>Condition 1: <?php echo $condition1 ? 'true' : 'false'; ?></p>
    <p>Condition 2: <?php echo $condition2 ? 'true' : 'false'; ?></p>

    <p> AND (Condition1 && Condition2): <?php echo $resultAnd ? 'true' : 'false'; ?></p>
    <p> OR (Condition1 || Condition2): <?php echo $resultOr ? 'true' : 'false'; ?></p>
    <p> NOT (!Condition1): <?php echo $resultNot1 ? 'true' : 'false'; ?></p>
    <p> NOT (!Condition2): <?php echo $resultNot2 ? 'true' : 'false'; ?></p>
</body>
</html>

