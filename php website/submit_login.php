<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password fields are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Get the form data
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $rollno = isset($_POST['rollno']) ? trim($_POST['rollno']) : null; // Optional field

        // Hardcoded correct credentials (for demonstration purposes)
        $correct_username = "sonukumar";
        $correct_password = "12345";

        // Check if the provided credentials match the correct ones
        if ($username === $correct_username && $password === $correct_password) {
            // Set session variables
            $_SESSION['username'] = $username;
            $_SESSION['rollno'] = $rollno; // Only if roll number is used

            // Redirect to the welcome page
            header("Location: web.html");
            exit();
        } else {
            // If credentials are incorrect, show an error message
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "Please fill in all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login Error</h2>
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>
        <a href="index.html">Go back to login</a>
    </div>
</body>
</html>
