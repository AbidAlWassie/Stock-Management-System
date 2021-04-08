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

<nav class="navbar">
  <h3><a href="insert.php">Insert</a></h3>
  <h3></h3>
  <h3></h3>
</nav>

<table class="table-sortable" id="stock">
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
          <td><a href='delete.php?id=$result[Product_ID]'>Delete</td>
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
    <th></th>
    </tr>
  </tfoot>
  </table>



</body>
</html>