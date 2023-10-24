<?php
require("config1.php");
$result = $mysqli->query("SELECT * FROM EMPLOYEE");
?>
<!DOCTYPE html>
<html>
<head>
<img src = "welcome little one!.png">
    <title>Display Employees</title>
</head>
<body>
    <h1>Employee List</h1>
    <table border="1">
        <tr>
            <th>SSN</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['SSN']; ?></td>
                <td><?php echo $row['FNAME']; ?></td>
                <td><?php echo $row['LNAME']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="index.php">Click here!</a> to go back
</body>
</html>
