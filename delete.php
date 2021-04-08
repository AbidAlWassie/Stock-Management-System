<?php
include("connect.php");
error_reporting(0);

$product_id=$_GET['id'];
$query = "DELETE FROM products WHERE Product_ID = '$product_id'"

$data = mysqli_query($connect,$query);

if ($data) {
  echo "<font color='red'>Item deleted from Database"
}

else {
  echo "<font color='blue'>Couldn't delete item"
}
?>