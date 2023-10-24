<?php
session_start();
require("config.php");
require("auth.php");
require("do_html_header.php");
require("do_menu.php");
require("clean.php");

do_html_header();
?>
<body>
<h1>Welcome <?php echo $_SESSION["SESS_FIRST_NAME"]; ?></h1>
<?php
do_menu();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation and data sanitation
    $SSN = clean($_POST['SSN']);
    //... (rest of your validation code remains the same)

    // Check if SSN already exists
    // Using mysqli and prepared statement
    $stmt = $mysqli->prepare("SELECT * FROM employee WHERE SSN = ?");
    $stmt->bind_param("s", $SSN);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['ERRMSG_ARR'] = 'Employee number ' . $SSN . ' is already assigned to another employee';
    } else {
        // Insert the employee data into the database
        // Using prepared statements
        $stmt = $mysqli->prepare("INSERT INTO employee (SSN, LNAME, FNAME, BDATE, SALARY) VALUES(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $SSN, $LNAME, $FNAME, $BDATE, $SALARY);

        if ($stmt->execute()) {
            echo "<BR><BR>1 record added<BR>";
            echo "Click <a href='limits2.php'>here</a> to view the updated list of employees.";
        } else {
            echo "Error adding the record: " . $stmt->error;
        }
    }
}
?>

<!-- HTML Form -->
<H2>Add Employee</H2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table width="400" border="0" cellspacing="1" cellpadding="2">
        <!-- Your form fields here -->
    </table>
</form>

</body>
</html>
