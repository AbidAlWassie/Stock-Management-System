<?php
include_once "includes/user_status.php";

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

include_once "includes/user_info.php";

$rl = "action='./toggle_m.php'";

include_once "templates/header.php";
// include_once "templates/nav.php";
include_once "templates/modify.php";
// include_once "templates/footer.php";


if($_GET['submit']) {
  $br = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['brand']));
  $pn = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['product']));
  $clr = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['color']));
  $sz = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['size']));
  $pr = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['price']));
  $qn = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['quantity']));
  $idt = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['id']));

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