<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('OIP.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .calculator {
            width: 700px;
            padding: 20px;
            height: 400px;
            background-color: #000000;
            border-radius: 5px;
            color: white;
            box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.75); /* Add a shadow effect */
        }
        .calculator form {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column; /* Stack the form elements vertically */
            justify-content: space-around; /* Distribute the space evenly between the form elements */
        }
        .calculator input, select, button {
            height: 40px;
            padding: 5px;
            border: none; /* Remove the border */
            border-radius: 5px; /* Round the corners */
            font-size: 18px; /* Increase the font size */
        }
        .calculator button {
            background-color: #4CAF50;
            color: white;
        }
        .calculator button:hover {
            background-color: #45a049;
        }
        .button{
            width:200px;
            height:70px;
            color: #ffffff;
            margin-top: 20px;
            margin-left: 260px;
            border-radius: 80px;
            margin-bottom: -10px;
            background-color: #4CAF50; /* Change the background color */
            transition: background-color 0.3s ease; /* Add a transition effect */
        }
        .button:hover {
            background-color: #45a049; /* Change the background color when hovered */
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post">
            <input type="number" name="num1" placeholder="First number" required>
            <input type="number" name="num2" placeholder="Second number" required>
            <select name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <button class="button" type="submit" name="submit">Calculate</button>
            <?php
            if (isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                switch ($operation) {
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
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            echo "Division by zero is not allowed.";
                            return;
                        }
                        break;
                }
                echo "<p>Result: " . $result . "</p>";
            }
            ?>
        </form>
    </div>
</body>
</html>
