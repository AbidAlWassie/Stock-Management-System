<?php
include("connect.php");
error_reporting(0);
$brand = $_GET['brand'];
$product = $_GET['product'];
$color = $_GET['color'];
$size = $_GET['size'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];
$id = $_GET['id'];

?>

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
  <title>Modify</title>
</head>
<body>



  <form action="" method="GET">
    <table id="table">
    <tr>
      <td>Brand</td>
      <td><input type="text" value="<?php echo "$brand" ?>" name="brand" placeholder="Brand"></td>
    </tr>

    <tr>
      <td>Product Name</td>
      <td><input type="text" value="<?php echo "$product" ?>" name="product" placeholder="Product Name"></td>
    </tr>

    <tr>
      <td>Color</td>
      <td><input type="text" value="<?php echo "$color" ?>" name="color" placeholder="Color"></td>
    </tr>

    <tr>
      <td>Size</td>
      <td><input type="text" value="<?php echo "$size" ?>" name="size" placeholder="Size"></td>
    </tr>

    <tr>
      <td>Price</td>
      <td><input type="text" value="<?php echo "$price" ?>" name="price" placeholder="Price"></td>
    </tr>

    <tr>
      <td>Quantity</td>
      <td><input type="text" value="<?php echo "$quantity" ?>" name="quantity" placeholder="Quantity"></td>
    </tr>

    <tr>
      <td>Product ID</td>
      <td><input type="text" value="<?php echo "$id" ?>" name="id" placeholder="Product ID"></td>
    </tr>

    <tr>
      <td colspan="2"><a class="btnSubmit" href="stock-table.php"><input id="btnSubmit" type="submit" name="submit"></a></td>
    </tr>
    
    </table>
  </form>
</body>
</html>

<?php

if($_GET['submit']) {
  $br = $_GET['brand'];
  $pn = $_GET['product'];
  $clr = $_GET['color'];
  $sz = $_GET['size'];
  $pr = $_GET['price'];
  $qn = $_GET['quantity'];
  $idt = $_GET['id'];

  $query = "UPDATE products SET Brand='$br',Product_Name='$pn',Color='$clr',Size='$sz',Price='$pr',Quantity='$qn',Product_ID='$idt' WHERE Product_ID='$idt'";

  $data = mysqli_query($connect, $query);

  if($data) {
    echo"<script>alert('Entry Successfully Updated!');</script>";
  }
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=stock-table.php">
  <?php
  
  
}

?>