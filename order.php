<?php
session_start();
// Check if the user isn't logged in then redirect to the index page
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}

include_once "includes/user_info.php";

$title = "Order";
$order = "class='active'";
$table_styles = "<link rel='stylesheet' href='css/table.css'>";
$rl = "action='./toggle_s.php'";


include_once "templates/header2.php";
include_once "templates/nav.php";
include_once "templates/order_template.php";
include_once "templates/footer.php";

include("connect.php");
error_reporting(0);

if (isset($_POST['submit'])) {
  $customer = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['customer']));
  $product_1 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_1']));
  $product_2 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_2']));
  $product_3 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_3']));
  $product_4 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_4']));
  $product_5 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_5']));
  $product_6 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_6']));
  $product_7 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_7']));
  $product_8 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_8']));
  $product_9 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_9']));
  $product_10 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_10']));
  $amount_1 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_1']));
  $amount_2 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_2']));
  $amount_3 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_3']));
  $amount_4 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_4']));
  $amount_5 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_5']));
  $amount_6 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_6']));
  $amount_7 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_7']));
  $amount_8 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_8']));
  $amount_9 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_9']));
  $amount_10 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_10']));

  if ($id != "" && $brand != "" && $product != "" && $color != "" && $size != "" && $price && $quantity != "") {
    $query = "INSERT INTO products VALUES ('$id', '$brand', '$product', '$color', '$size', '$price', '$quantity')";
    $data = mysqli_query($connect, $query);

    if ($data) {
      echo "Data inserted into the Database";
    } else {
      echo "couldn't execute " + $query;
    }
  }
}
