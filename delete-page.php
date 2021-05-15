<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

$title = "Delete from Database";

include_once "includes/user_info.php";

$rl = "action='./toggle_d.php'";

include_once "templates/header.php";
include_once "templates/nav.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/package.png">
  <!-- <link rel="stylesheet" href="css/table.css"> -->
  <link rel="stylesheet" href="css/delete.css">
  <!-- <link rel="stylesheet" href="fonts/stylesheet.css"> -->
  <title>Display from Database</title>
</head>
<body>

<table class="table-sortable <?php echo $theme ?>" id="stock">
  <thead id="list-column">
    <tr>
      <th>Brand</th>
      <th>Product Name</th>
      <th>Color</th>
      <th>Size</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Product ID</th>
      <th>Options</th>
    </tr>
  </thead>

  <tbody id="root-stock" class="list-items">
    <?php
    include("connect.php");
    error_reporting(0);
    $query = "SELECT * FROM products";
    $data = mysqli_query($connect, $query);
    $total = mysqli_num_rows($data); 

    if ($total!=0) {
        while($result=mysqli_fetch_assoc($data)) 
        {
          echo 
          "
          <tr>
          <td>".$result['Brand']."</td>
          <td>".$result['Product_Name']."</td>
          <td>".$result['Color']."</td>
          <td>".$result['Size']."</td>
          <td>".$result['Price']."</td>
          <td>".$result['Quantity']."</td>
          <td>".$result['Product_ID']."</td>
          <td><a href='delete.php?id=$result[Product_ID]' onclick='return confirmDelete()' class='btnDelete'>Delete</td>
          </tr>
          ";
        }
    } 
    else {
      echo "No records found";
    }
  ?>
  
  </tbody>

  <tfoot>
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th>Total</th>
    <th id="result"></th>
    <th colspan="2"></th>
    </tr>
  </tfoot>
  </table>

<?php

include_once "templates/footer.php";

?>