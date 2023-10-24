<?php /*
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<body>
<img src = "welcome little one!.png">
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <a href="navigation.php">Go to Navigation Page</a> 
    <a href="login.php?action=logout">Logout</a>
</body>
</html>
