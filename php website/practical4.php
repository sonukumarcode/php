<?php
function calculator($num1, $num2, $choice) {
    switch ($choice) {
        case 1:
            return $num1 + $num2;
        case 2:
            return $num1 - $num2;
        case 3:
            return $num1 * $num2;
        case 4:
            return ($num2 != 0) ? $num1 / $num2 : "Division by zero is not allowed";
        default:
            return "Invalid choice. Please select a valid operation.";
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $choice = (int)$_POST['operation'];

    $result = calculator($num1, $num2, $choice);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <label for="num1">Enter First Number:</label>
        <input type="text" id="num1" name="num1" required><br><br>

        <label for="num2">Enter Second Number:</label>
        <input type="text" id="num2" name="num2" required><br><br>

        <label>Select Operation:</label><br>
        <input type="radio" name="operation" value="1" required> Addition (+)<br>
        <input type="radio" name="operation" value="2"> Subtraction (-)<br>
        <input type="radio" name="operation" value="3"> Multiplication (*)<br>
        <input type="radio" name="operation" value="4"> Division (/)<br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($result)) {
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
