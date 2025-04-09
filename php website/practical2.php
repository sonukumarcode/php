<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Check Whether a Number is Even or Odd</h2>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['number'];

        if ($num % 2 == 0) {
            echo "<h3>The number $num is Even.</h3>";
        } else {
            echo "<h3>The number $num is Odd.</h3>";
        }
    }
    ?>
</body>
</html>
