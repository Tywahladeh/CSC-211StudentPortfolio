<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            background-color: #f2f2f2;
        }
        .container {
            margin: 0 auto;
            width: 300px;
            height: 300px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .form {
            margin: 50px auto;
            width: 200px;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="form" method="post">
            <input type="text" name="num1" placeholder="Enter first number" required><br>
            <input type="text" name="num2" placeholder="Enter second number" required><br>
            <input type="submit" name="add" value="Add">
            <input type="submit" name="sub" value="Subtract">
            <input type="submit" name="mul" value="Multiply">
            <input type="submit" name="div" value="Divide">
        </form>
    </div>
    <?php
        if(isset($_POST['add'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1 + $num2;
            echo "<p style='text-align:center; font-size:20px;'><b>The sum of $num1 and $num2 is $result</b></p>";
        }
        if(isset($_POST['sub'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1 - $num2;
            echo "<p style='text-align:center; font-size:20px;'><b>The difference between $num1 and $num2 is $result</b></p>";
        }
        if(isset($_POST['mul'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1 * $num2;
            echo "<p style='text-align:center; font-size:20px;'><b>The product of $num1 and $num2 is $result</b></p>";
        }
        if(isset($_POST['div'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1 / $num2;
            echo "<p style='text-align:center; font-size:20px;'><b>The quotient of $num1 and $num2 is $result</b></p>";
        }
    ?>
</body>
</html>
