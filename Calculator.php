<!DOCTYPE html>
<html>
<head>
    <title>PHP Jelisha </title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operator">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        if ($operator == "add") {
            $result = $num1 + $num2;
            echo "Result: $num1 + $num2 = $result";
        } elseif ($operator == "subtract") {
            $result = $num1 - $num2;
            echo "Result: $num1 - $num2 = $result";
        } elseif ($operator == "multiply") {
            $result = $num1 * $num2;
            echo "Result: $num1 * $num2 = $result";
        } elseif ($operator == "divide") {
            if ($num2 == 0) {
                echo "Division by zero is not allowed.";
            } else {
                $result = $num1 / $num2;
                echo "Result: $num1 / $num2 = $result";
            }
        }
    }
    ?>
</body>
</html>
