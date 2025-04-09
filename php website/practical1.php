<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <form method="post" action="">
        <label for="name">Enter Your Name:</label>
        <input type="text" name="name" id="name" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        echo "<h2>Your Name is: $name</h2>";
    }
    ?>
</body>
</html>
