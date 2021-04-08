<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/package.png">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .btnSubmit {
      display: flex;
      justify-content: center;
    }
    #btnSubmit {
    width: 250px;
    }
  </style>
  <title>Insert Database</title>

  <title>Modify</title>
</head>
<body>

<nav class="navbar">
  <h3><a href="stock-table.php">Stock</a></h3>
  <h3></h3>
  <h3></h3>
</nav>


  <form action="" method="GET">
    <table id="table">
    <tr>
      <td>Brand</td>
      <td><input type="text" name="brand" placeholder="Brand"></td>
    </tr>

    <tr>
      <td>Product Name</td>
      <td><input type="text" name="product" placeholder="Product Name"></td>
    </tr>

    <tr>
      <td>Color</td>
      <td><input type="text" name="color" placeholder="Color"></td>
    </tr>

    <tr>
      <td>Size</td>
      <td><input type="text" name="size" placeholder="Size"></td>
    </tr>

    <tr>
      <td>Price</td>
      <td><input type="text" name="price" placeholder="Price"></td>
    </tr>

    <tr>
      <td>Quantity</td>
      <td><input type="text" name="quantity" placeholder="Quantity"></td>
    </tr>

    <tr>
      <td>Product ID</td>
      <td><input type="text" name="id" placeholder="Product ID"></td>
    </tr>

    <tr>
      <td colspan="2"><a class="btnSubmit" href="stock-table.php"><input id="btnSubmit" type="submit"></a></td>
    </tr>
    
    </table>
  </form>
</body>
</html>

<?php

include("connect.php");
error_reporting(0);

$brand=$_GET['brand'];
$product=$_GET['product'];
$color=$_GET['color'];
$size=$_GET['size'];
$price=$_GET['price'];
$quantity=$_GET['quantity'];
$id=$_GET['id'];

$query="INSERT INTO products VALUES ('$brand', '$product', '$color', '$size', '$price', '$quantity', '$id')";
$data=mysqli_query($connect, $query);

if ($data) {
  echo "Data inserted into the Database";
} else {
  echo "couldn't execute " + $query;
}
?>