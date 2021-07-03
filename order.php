<?php
session_start();
// Check if the user isn't logged in then redirect to the index page
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}

include_once "includes/user_info.php";

$title = "Stock";
$stock = "class='active'";
$table_styles = "<link rel='stylesheet' href='css/table.css'>";
$rl = "action='./toggle_s.php'";


include_once "templates/header.php";
include_once "templates/nav.php";
include_once "templates/order_template.php";
include_once "templates/footer.php";
