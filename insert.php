<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}


$title = "Insert into Database";
$insert = "class='active'";
$form_styles = "<link rel='stylesheet' href='css/form.css'>";


include_once "templates/header.php";
include_once "templates/nav.php";
include_once "templates/insert.php";
// include_once "templates/footer.php";

?>