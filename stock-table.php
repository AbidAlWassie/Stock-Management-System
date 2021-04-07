<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/package.png">
  <link rel="stylesheet" href="css/table.css">
  <title>Display from Database</title>
</head>
<body>

<table class="table-sortable" id="stock">
    <thead id="list-column">
      <tr>
        <th>Brand</th>
        <th>Product Name</th>
        <th>Color</th>
        <th>Size</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
    </thead>

<?php
include("connect.php");
error_reporting(0);
$query = "SELECT * FROM products";
$data = mysqli_query($connect, $query);
$total = mysqli_num_rows($data); 

if ($total!=0) {
  echo "Table has records";
} else {
  echo "No records found";
}

?>

    <tbody id="root-stock" class="list-items">
      <tr>
        <th>Berger</th>
        <th>SPD</th>
        <th>White</th>
        <th>18 liter</th>
        <th>520</th>
        <th>1</th>
      </tr>
      <tr>
        <th>Berger</th>
        <th>SPD</th>
        <th>White</th>
        <th>18 liter</th>
        <th>520</th>
        <th>1</th>
      </tr>
    </tbody>

    <tfoot>
      <tr>
      <th></th>
      <th></th>
      <th></th>
      <th>Total</th>
      <th id="result"></th>
      <th></th>
      </tr>
    </tfoot>
    </table>



</body>
</html>