<?php
error_reporting(0);
// $links = array($stock, $insert, $about, $logout);
?>
<nav class="navbar">
  <a <?php echo $stock ?> href="stock.php">Stock</a>
  <a <?php echo $insert ?> href="insert.php">Insert</a>
  <a <?php echo $about ?> href="about.php">About</a>
  <a class="danger" href="delete-page.php">Delete</a>
  <form <?php echo $rl ?> method="POST"><button type="submit" name="submit" class="btnToggle">Theme</button></form>
  <a class="logout" <?php echo $logout ?> href="logout.php">Logout</a>
</nav>