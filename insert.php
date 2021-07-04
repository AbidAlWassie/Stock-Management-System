<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}


$title = "Insert into Database";
$insert = "class='active'";
$form_styles = "<link rel='stylesheet' href='css/form.css'>";

include_once "includes/user_info.php";

$rl = "action='./toggle_i.php'";


include_once "templates/header.php";
include_once "templates/nav.php";
include_once "templates/insert.php";
// include_once "templates/footer.php";


include("connect.php");
error_reporting(0);

if (isset($_POST['submit'])) {
  $brand = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['brand']));
  $product = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product']));
  $color = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['color']));
  $size = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['size']));
  $price = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['price']));
  $quantity = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['quantity']));
  $id = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['id']));

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


if (isset($_POST['csubmit'])) {
  $cid = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['cid']));
  $cname = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['cname']));
  $nickname = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['nickname']));
  $location = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['location']));
  $phone = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['phone']));

  if ($cid != "" && $cname != "" && $nickname != "" && $location != "" && $phone != "") {
    $query = "INSERT INTO customer VALUES ('$cid', '$cname', '$nickname', '$location', '$phone')";
    $data = mysqli_query($connect, $query);

    if ($data) {
      echo "Data inserted into the Database";
    } else {
      echo "couldn't execute " + $query;
    }
  }
}
