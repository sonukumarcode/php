<?php
// PHP script to find the largest among three numbers using user input

// Taking user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    // Checking the largest number
    if ($num1 >= $num2 && $num1 >= $num3) {
        $largest = $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        $largest = $num2;
    } else {
        $largest = $num3;
    }

    echo "<h1>The largest number is:  $largest </h1>" ;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Find Largest Number</title>
</head>
<body>
    <h2>Enter Three Numbers</h2>
    <form method="post">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        Number 3: <input type="number" name="num3" required><br><br>
        <input type="submit" value="Find Largest">
    </form>
</body>
</html>
