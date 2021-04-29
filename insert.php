<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/package.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/stylesheet.css">
  <style>
    body {
      background: #2d6fff;
      font-family: Arial, Helvetica, sans-serif;
    }

    
    .navbar {
      display: flex;
    }

    .navbar a {
      font-size: 30px;
      text-decoration: none;
      padding: 1.5px 15px;
      color: white;
      background-color: #272727;
    }

    .navbar a.active {
      background-color: #3D3D3D;
    }


    header h1 {
      /* display: flex; */
      text-align: center;
      color:white;
    }

    .btnSubmit {
      display: flex;
      justify-content: center;
    }
    #btnSubmit {
    width: 50%;
    }

    a {
      text-decoration: none;
      font-size: 2rem;
      padding: 10px;
      color: white;
    }

    a.danger {
      color: white;
      background-color: red;
    }

    a:hover {
      text-decoration: underline !important;
    }


    /* .navbar a:not(.danger) {
      color: white;
      background-color: black;
    } */

    input {
      font-size: 1rem;
    }

    span {
      font-size: 2rem;
      font-weight: 900;
    }

    #table1 {
      /* display: flex;
      justify-content: center; */
      background: #e1e5eb;
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 600px;
      margin: 0 auto;
      }

      /* tbody {
        padding: 20px;
      } */

      .label {
        float:right;
        text-align: center;
        padding: 25px 10px;
      }

      .input:first-child{
        padding-top: 10px;
      }

      .input {
        padding-right: 20px;
        /* padding: 25px 10px; */
      }

    #table td, #table th {
      border: 1px solid #ddd;
      /* padding: 8px; */
    }

    #table tr:nth-child(even){background-color: #f2f2f2;}

    #table tr:hover {background-color: #ddd;}

    #table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
  </style>
  <title>Insert into Database</title>

  <title>Modify</title>
</head>
<body>

<nav class="navbar">
  <a href="stock.php" draggable="false">Stock</a>
  <a href="insert.php" class="active" draggable="false">Insert</a>
  <a href="about.php" draggable="false">About</a>
  <a class="danger" href="delete-page.php" draggable="false">Delete</a>
  <a href="logout.php">Logout</a>
</nav>


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
include("connect.php");
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