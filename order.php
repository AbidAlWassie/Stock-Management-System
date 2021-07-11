<?php
session_start();
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
  $customer_id = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['customer_id']));
  $product_1 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_1']));
  $amount_1 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_1']));
  $product_2 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_2']));
  $amount_2 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_2']));
  $product_3 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_3']));
  $amount_3 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_3']));
  $product_4 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_4']));
  $amount_4 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_4']));
  $product_5 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_5']));
  $amount_5 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_5']));
  $product_6 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_6']));
  $amount_6 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_6']));
  $product_7 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_7']));
  $amount_7 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_7']));
  $product_8 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_8']));
  $amount_8 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_8']));
  $product_9 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_9']));
  $amount_9 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_9']));
  $product_10 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product_10']));
  $amount_10 = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['amount_10']));

  // $product_2 = !empty($product_2) ? "'$product_2'" : "NULL";
  // $amount_2 = !empty($amount_2) ? "'$amount_2'" : "NULL";
  // if ($product_2 == 0 || $amount_2 == 0) {
  //   $product_2 = 'NULL';
  //   $amount_2 = 'NULL';

  // if ($customer_id != "" && $product_1 != "" && $amount_1 != "") {
  $query = "INSERT INTO `orders` (`Order_ID`, `Customer_ID`, `Product_1`, `Amount_1`, `Product_2`, `Amount_2`, `Product_3`, `Amount_3`, `Product_4`, `Amount_4`, `Product_5`, `Amount_5`, `Product_6`, `Amount_6`, `Product_7`, `Amount_7`, `Product_8`, `Amount_8`, `Product_9`, `Amount_9`, `Product_10`, `Amount_10`, `Date`) VALUES (NULL, '$customer_id', '$product_1', '$amount_1', '$product_2', '$amount_2', '$product_3', '$amount_3', '$product_4', '$amount_4', '$product_5', '$amount_5', '$product_6', '$amount_6', '$product_7', '$amount_7', '$product_8', '$amount_8', '$product_9', '$amount_9', '$product_10', '$amount_10', Null);";

  $data = mysqli_query($connect, $query);

  //   if ($data) {
  //     echo "Data inserted into the Database";
  //   } else {
  //     echo "couldn't execute " + $query;
  //   }
  // }
  // }
}
