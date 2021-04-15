<?php
include("connect.php");
error_reporting(0);
$brand = mysqli_real_escape_string($connect, $_GET['brand']);
$product = mysqli_real_escape_string($connect, $_GET['product']);
$color = mysqli_real_escape_string($connect, $_GET['color']);
$size = mysqli_real_escape_string($connect, $_GET['size']);
$price = mysqli_real_escape_string($connect, $_GET['price']);
$quantity = mysqli_real_escape_string($connect, $_GET['quantity']);
$id = mysqli_real_escape_string($connect, $_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/package.png">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background: #2d6fff;
      margin: 0;
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
    }

    a.back {
      color: white;
    }

    a.back:hover {
      text-decoration: underline !important;
    }

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
  <title>Modify</title>
</head>
<body>

<nav class="navbar">
  <a class="back" href="index.php"><span>&#60;</span>Back</a>
</nav>

<header>
  <h1>Update your entry</h1>
</header>

  <form action="" method="GET">
    <table id="table1">

    <tr>
      <td class="label">Product ID</td>
      <td class="input"><input type="text" value="<?php echo "$id" ?>" name="id" placeholder="Product ID"></td>
    </tr>

    <tr>
      <td class="label">Brand</td>
      <td class="input"><input type="text" value="<?php echo "$brand" ?>" name="brand" placeholder="Brand"></td>
    </tr>

    <tr>
      <td class="label">Product Name</td>
      <td class="input"><input type="text" value="<?php echo "$product" ?>" name="product" placeholder="Product Name"></td>
    </tr>

    <tr>
      <td class="label">Color</td>
      <td class="input"><input type="text" value="<?php echo "$color" ?>" name="color" placeholder="Color"></td>
    </tr>

    <tr>
      <td class="label">Size</td>
      <td class="input"><input type="text" value="<?php echo "$size" ?>" name="size" placeholder="Size"></td>
    </tr>

    <tr>
      <td class="label">Price</td>
      <td class="input"><input type="text" value="<?php echo "$price" ?>" name="price" placeholder="Price"></td>
    </tr>

    <tr>
      <td class="label">Quantity</td>
      <td class="input"><input type="text" value="<?php echo "$quantity" ?>" name="quantity" placeholder="Quantity"></td>
    </tr>

    

    <tr>
      <td colspan="2"><a class="btnSubmit" href="index.php"><input id="btnSubmit" type="submit" name="submit"></a></td>
    </tr>
    
    </table>
  </form>
</body>
</html>

<?php

if($_GET['submit']) {
  $br = htmlspecialchars($_GET['brand']);
  $pn = htmlspecialchars($_GET['product']);
  $clr = htmlspecialchars($_GET['color']);
  $sz = htmlspecialchars($_GET['size']);
  $pr = htmlspecialchars($_GET['price']);
  $qn = htmlspecialchars($_GET['quantity']);
  $idt = htmlspecialchars($_GET['id']);

  $query = "UPDATE products SET Brand='$br',Product_Name='$pn',Color='$clr',Size='$sz',Price='$pr',Quantity='$qn',Product_ID='$idt' WHERE Product_ID='$idt'";

  $data = mysqli_query($connect, $query);

  if($data) {
    echo"<script>alert('Entry Successfully Updated!');</script>";
  }
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
  <?php
  
  
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