<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}


$title = "Insert into Database";
$insert = "class='active'";
$form_styles = "<link rel='stylesheet' href='css/form.css'>";


include_once "templates/header.php";
include_once "templates/nav.php";
include_once "templates/insert.php";
// include_once "templates/footer.php";

?>

<?php
include("connect.php");
error_reporting(0);

if(isset($_POST['submit'])){
  $brand=$_POST['brand'];
  $product=$_POST['product'];
  $color=$_POST['color'];
  $size=$_POST['size'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];
  $id=$_POST['id'];
  
  if($id!="" && $brand!="" && $product!="" && $color!="" && $size!="" && $price && $quantity!="") {
    $query="INSERT INTO products VALUES ('$id', '$brand', '$product', '$color', '$size', '$price', '$quantity')";
    $data=mysqli_query($connect, $query);

    if ($data) {
      echo "Data inserted into the Database";
    }
    
    else {
      echo "couldn't execute " + $query;
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

}


?>