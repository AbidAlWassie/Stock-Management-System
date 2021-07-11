<div id="root" class="list-items <?php echo $theme ?>">
  <?php
  include("./connect.php");
  error_reporting(0);
  $query = "SELECT * FROM orders";
  $data = mysqli_query($connect, $query);
  $total = mysqli_num_rows($data);

  if ($total != 0) {
    while ($result = mysqli_fetch_assoc($data)) {
      echo
      "
          <ul class='purchase-list'>
          <li> Order Id <span class='value'>" . $result['Order_ID'] . "</span></li>
          <li> Customer Id <span class='value'>" . $result['Customer_ID'] . "</span></li>
          <li> Item_1 <span class='value'>" . $result['Product_1'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_1'] . "</span></li>
          <li> Item_2 <span class='value'>" . $result['Product_2'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_2'] . "</span></li>
          <li> Item_3 <span class='value'>" . $result['Product_3'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_3'] . "</span></li>
          <li> Item_4 <span class='value'>" . $result['Product_4'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_4'] . "</span></li>
          <li> Item_5 <span class='value'>" . $result['Product_5'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_5'] . "</span></li>
          <li> Item_6 <span class='value'>" . $result['Product_6'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_6'] . "</span></li>
          <li> Item_7 <span class='value'>" . $result['Product_7'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_7'] . "</span></li>
          <li> Item_8 <span class='value'>" . $result['Product_8'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_8'] . "</span></li>
          <li> Item_9 <span class='value'>" . $result['Product_9'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_9'] . "</span></li>
          <li> Item_10 <span class='value'>" . $result['Product_10'] . "</span></li>
          <li> Amount <span class='value'>" . $result['Amount_10'] . "</span></li>
          <li> Date <span class='value'>" . $result['Date'] . "</li>
          </ul>
          ";
    }
  } else {
    echo "No records found";
  }
  ?>
</div>