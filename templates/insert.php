
<header>
  <h1>Create a new entry</h1>
</header>


  <form action="" method="POST">
    <table id="table1">
    
    <tr>
      <td class="label">Product ID</td>
      <td class="input"><input type="text" name="id" placeholder="Product ID" required></td>
    </tr>

    <tr>
      <td class="label">Brand</td>
      <td class="input"><input type="text" name="brand" placeholder="Brand" required></td>
    </tr>

    <tr>
      <td class="label">Product Name</td>
      <td class="input"><input type="text" name="product" placeholder="Product Name" required></td>
    </tr>

    <tr>
      <td class="label">Color</td>
      <td class="input"><input type="text" name="color" placeholder="Color" required></td>
    </tr>

    <tr>
      <td class="label">Size</td>
      <td class="input"><input type="text" name="size" placeholder="Size" required></td>
    </tr>

    <tr>
      <td class="label">Price</td>
      <td class="input"><input type="text" name="price" placeholder="Price" required></td>
    </tr>

    <tr>
      <td class="label">Quantity</td>
      <td class="input"><input type="text" name="quantity" placeholder="Quantity" required></td>
    </tr>

    

    <tr>
      <td colspan="2"><a class="btnSubmit" href="index.php"><input id="btnSubmit" type="submit" name="submit" value="Insert"></a></td>
    </tr>
    
    </table>
  </form>
</body>
</html>

<?php
include("./connect.php");
error_reporting(0);

if(isset($_POST['submit'])){
  $id = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['id']));
  $brand = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['brand']));
  $product = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['product']));
  $color = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['color']));
  $size = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['size']));
  $price = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['price']));
  $quantity = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['quantity']));
  
  if($id!="" && $brand!="" && $product!="" && $color!="" && $size!="" && $price!="" && $quantity!="") {
    $query="INSERT INTO `products` VALUES ('$id', '$brand', '$product', '$color', '$size', '$price', '$quantity')";
    $data=mysqli_query($connect, $query);

    if ($data) {
      echo "Data inserted into the Database";
    }
    
    else {
      echo "couldn't execute " + $query;
    }
  }

}


function getUserIp() {
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_addr = $_SERVER['HTTP_CLIENT_IP'];
  } else if (!empty($ip_addr = $_SERVER['HTTP_FORWARDED_FOR'])) {
    $ip_addr = $_SERVER['HTTP_FORWARDED_FOR'];
  } else {
    $ip_addr = $_SERVER['REMOTE_ADDR'];
  }
  return $ip_addr;
}

$ip = getUserIp();

echo $ip;

?>