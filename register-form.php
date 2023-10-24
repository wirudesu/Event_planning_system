<?php
// Define a function to handle user registration
function register() {
    // Retrieve the username and password from the form submission
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation to check if the username and password are not empty
    // In a real-world application, you would also check against a database and possibly hash the password
    if (!empty($username) && !empty($password)) {
        // Redirect to the login page with a success message (status=registered)
        header('Location: login.php?status=registered');
        exit();
    } else {
        // Redirect to the registration page with a failure message (status=failed)
        header('Location: register-form.php?status=failed');
        exit();
    }
}

// Check if the form has been submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If so, run the register function
    register();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <!-- Link to the stylesheet -->
    <link rel="stylesheet" type="text/css" href="loginmodule.css">
</head>
<body>
    <center>
        <!-- Display an image (ensure the image path is correct) -->
        <img src="welcome little one!.png">
        <!-- Registration form header -->
        <h1>Register</h1>
        <!-- Registration form -->
        <form action="register-form.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Register">
        </form>
        <!-- Link to the login page for those who already have an account -->
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </center>
</body>
</html>
