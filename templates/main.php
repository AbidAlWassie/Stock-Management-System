<table class="table-sortable" id="stock">
  <thead id="list-column <?php echo $theme ?>">
    <tr>
      <th>Brand</th>
      <th>Product Name</th>
      <th>Color</th>
      <th>Size</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Product ID</th>
      <th colspan="2">Options</th>
    </tr>
  </thead>

  <tbody id="root-stock" class="list-items <?php echo $theme ?>">
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
          <td><a href='modify.php?brand=$result[Brand]&product=$result[Product_Name]&color=$result[Color]&size=$result[Size]&price=$result[Price]&quantity=$result[Quantity]&id=$result[Product_ID]' class='btnModify'>Modify</td>
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