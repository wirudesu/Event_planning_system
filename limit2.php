<?php
session_start();
require("config.php");
require("auth.php");
require("do_html_header.php");
require("do_menu.php");
require("clean.php");

do_html_header();
echo "<body><h1>Welcome " . $_SESSION['SESS_FIRST_NAME'] . "</h1>";
do_menu();

$rowPerPage = 5;
$pageNum = 1;

echo "<H2>Display Employees</H2>";

if (isset($_GET['page'])) {
    $pageNum = clean($_GET['page']);
}

$offset = ($pageNum - 1) * $rowPerPage;

// Query for displaying employees using prepared statements
$stmt = $mysqli->prepare("SELECT SSN, LNAME, FNAME FROM EMPLOYEE ORDER BY SSN LIMIT ?, ?");
$stmt->bind_param("ii", $offset, $rowPerPage);
$stmt->execute();
$result = $stmt->get_result();

echo "<CENTER><H1>This is page $pageNum of the list of employees!</H1></CENTER>";
echo "<CENTER><TABLE BORDER=1 CELLPADDING=5 CELLSPACING=5><TR BGCOLOR='yellow'><TD>SSN</TD><TD>LastName</TD><TD>FirstName</TD></TR>";

while ($row = $result->fetch_assoc()) {
    echo "<TR>";
    echo "<TD>{$row['SSN']}</TD>";
    echo "<TD>{$row['LNAME']}</TD>";
    echo "<TD>{$row['FNAME']}</TD>";
    echo "</TR>";
}

echo "</Table></Center>";

// Query for counting total number of rows
$stmt = $mysqli->prepare("SELECT count(*) AS numrows FROM EMPLOYEE");
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$numrows = $row['numrows'];

echo "<HR><BR><CENTER>There are a total of $numrows employee records";

$maxPage = ceil($numrows / $rowPerPage);

// Pagination links
echo "<br><CENTER>Go to page : ";
for ($page = 1; $page <= $maxPage; $page++) {
    echo "<a href='limits2.php?page=$page'>$page</a> ";
}

echo "<BR>Click <a href='DisplayEmployeeLink.php'>here</a> to view all employees.<BR></Center>";

include 'closedb.php';
?>
