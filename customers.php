<?php
session_start();
// Check if the user isn't logged in then redirect to the index page
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}

include_once "includes/user_info.php";

$title = "Order";
$customers = "class='active'";
$table_styles = "<link rel='stylesheet' href='css/table.css'>";
$rl = "action='./toggle_s.php'";


include_once "templates/header2.php";
include_once "templates/nav.php";
include_once "templates/customer_template.php";
include_once "templates/footer.php";
