<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$DATABASE_PORT = '3307';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, $DATABASE_PORT);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();

include("connect.php");
error_reporting(0);
$brand = mysqli_real_escape_string($connect, $_GET['brand']);
$product = mysqli_real_escape_string($connect, $_GET['product']);
$color = mysqli_real_escape_string($connect, $_GET['color']);
$size = mysqli_real_escape_string($connect, $_GET['size']);
$price = mysqli_real_escape_string($connect, $_GET['price']);
$quantity = mysqli_real_escape_string($connect, $_GET['quantity']);
$id = mysqli_real_escape_string($connect, $_GET['id']);


$title = "Modify";
// $insert = "class='active'";
$form_styles = "<link rel='stylesheet' href='css/form.css'>";


include_once "templates/header.php";
// include_once "templates/nav.php";
include_once "templates/modify.php";
// include_once "templates/footer.php";

?>

<?php

if($_GET['submit']) {
  $br = htmlspecialchars($_GET['brand']);
  $pn = htmlspecialchars($_GET['product']);
  $clr = htmlspecialchars($_GET['color']);
  $sz = htmlspecialchars($_GET['size']);
  $pr = htmlspecialchars($_GET['price']);
  $qn = htmlspecialchars($_GET['quantity']);
  $idt = htmlspecialchars($_GET['id']);

  $query = "UPDATE products SET Brand='$br',Product_Name='$pn',Color='$clr',Size='$sz',Price='$pr',Quantity='$qn',Product_ID='$idt' WHERE Product_ID='$idt'";

  $data = mysqli_query($connect, $query);

  if($data) {
    echo"<script>alert('Entry Successfully Updated!');</script>";
  }
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=stock.php">
  <?php
  
  
}

function getUserIp() {
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_addr = $_SERVER['HTTP_CLIENT_IP'];
  } else if (!empty($ip_addr = $_SERVER['HTTP_FORWARDED_FOR'])) {
    $ip_addr = $_SERVER['HTTP_FORWARDED_FOR'];
  } else {
    $ip_addr = $_SERVER['REMOTE_ADDR'];
  }
  return $ip_addr;
}

$ip = getUserIp();

echo $ip;

?>