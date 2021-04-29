<script>
  function confirmDelete() {
    return confirm('Do you really want to Delete this row?');
  }
</script>

<?php
include("connect.php");
error_reporting(0);

$Product_ID=$_GET['id'];
$query="DELETE FROM products WHERE Product_ID = '$Product_ID'";

$data=mysqli_query($connect,$query);

if ($data) {
  echo "<script>alert('Item deleted from Database');</script>";

  ?>

  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=stock.php">
  
<?php

} else {
  echo "<font color='red'>Couldn't delete item";
}

?>