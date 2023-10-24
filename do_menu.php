<?php
function do_menu() {
    print "
    This is a password-protected area only accessible to members. <br>
    <a href=\"member-index.php\">Home</a> | <a href=\"logout.php\">Logout</a> |
    <a href=\"limits2.php\">Display All Employees</a> | <a href=\"AddEmployee.php\">Add Employee</a> |
    <a href=\"UpdateEmployee.php\">Edit Employee</a> | <a href=\"DeleteEmployee.php\">Delete Employee</a>
    <hr>
    ";
}
?>
