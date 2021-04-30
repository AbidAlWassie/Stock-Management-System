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
$rl = "action='./toggle_s.php'";


include_once "templates/header.php";
include_once "templates/nav.php";
include_once "templates/main.php";
include_once "templates/footer.php";

?>