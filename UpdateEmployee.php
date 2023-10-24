<?php 
    require("auth.php");
    require("config.php");
    require("do_html_header.php");
    require("do_menu.php");
    do_html_header();
    print "<body><h1>Welcome ". $_SESSION['$_SESS_FIRST_NAME']."</h1>";
    do_menu();
    ?>
    <h2>Update Employee</h2>
    <form action="upd2.php" method="POST">
        <table width="400" border="0" cellspacing="1" cellpadding="2">
            <tr>
                <td width="100"> Type the employee number of the employee you wish to update: </td>
                <td><input name="SSN" type="text" id="SSN"></td>
            </tr>
            <tr>
                <td width="100">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
    </body>
    </html>



