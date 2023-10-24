<?php
// Define a function to handle login execution
function login_exec() {
    // Your login logic here
    // For example, check user credentials and set session variables upon successful login
    $username = $_POST['login'];
    $password = $_POST['password'];

    // Replace this with your actual login logic
    if ($username === 'your_username' && $password === 'your_password') {
        // Redirect to a logged-in page or perform other actions
        header('Location: login-exec.php');
        exit();
    } else {
        // Redirect to the login-failed page
        header('Location: login-failed.php');
        exit();
    }
}

// Define a function to handle logout
function logout() {
    // Your logout logic here
    // For example, destroy session and redirect to the login page
    session_start();
    session_destroy();
    header('Location: login.php');
    exit();
}

// Check if a specific action is requested
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Perform the requested action
    switch ($action) {
        case 'login':
            login_exec();
            break;
        case 'logout':
            logout();
            break;
        default:
            // Handle other actions or invalid requests
            header('Location: login.php');
            exit();
    }
}

// Your HTML and login form code here
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="loginmodule.css">
</head>
<body>
    <center>
        <img src = "welcome little one!.png">
    <h1>Login</h1>
    <form action="login.php?action=login" method="post">
        <label for="login">Username:</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register-form.php">Create one</a></p>
</center>
</body>
</html>