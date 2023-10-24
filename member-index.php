<?php
session_start();
require("auth.php");
require("do_html_header.php");
require("do_menu.php");

do_html_header();
print" <body>
       <h1>Welcome ". $_SESSION['SESS_FIRDT_NAME']."</h1>";
       do_menu();
?>
</body>
</html>