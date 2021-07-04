<?php
error_reporting(0);
// $links = array($stock, $insert, $about, $logout);
?>
<nav class="navbar">
  <a draggable="false" <?php echo $stock ?> href="stock.php">Stock</a>
  <a draggable="false" <?php echo $insert ?> href="insert.php">Insert</a>
  <a draggable="false" <?php echo $order ?> href="order.php">Order</a>
  <a draggable="false" <?php echo $order_list ?> href="order_list.php">Order List</a>
  <a draggable="false" <?php echo $customers ?> href="customers.php">Customers</a>
  <a draggable="false" <?php echo $about ?> href="about.php">About</a>
  <a draggable="false" class="danger" href="delete-page.php">Delete</a>
  <form <?php echo $rl ?> method="POST"><button type="submit" name="submit" class="btnToggle"><i class="material-icons">light_mode</i> Mode</button></form>
  <a draggable="false" class="logout" <?php echo $logout ?> href="logout.php"><i class="material-icons">logout</i> Logout</a>
</nav>