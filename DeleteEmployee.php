<?php
require("auth.php");
require("do_html_header.php");
require("do_menu.php");
do_html_header();
print "<body><h1>Welcome ". $_SESSION["SESS_FRIST_NAME"]."</h1>";
do_menu();
?>
<H2>Delete Employee</H2>
<form action="="del2.php" method="POST">
<table width="400" border="0" cellspacing="1" cellspadding="2">
    <tr>
        <td witdh="100"> Type the employee number of the employee you wish to delete:</td>
        <td><input name="SSN" type="text" id="SSN"></td>
    </tr>
    <tr>
        <td width="100">&nbsp;</td>
        <td><input name="SUBMIT" type="SUBMIT" id="DELETE" value="Search"></td>
    </tr>
</table>
</form>
</body>
</html>