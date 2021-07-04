<?php
include_once "includes/user_status.php";

include("connect.php");
error_reporting(0);
$cname = mysqli_real_escape_string($connect, $_GET['cname']);
$nickname = mysqli_real_escape_string($connect, $_GET['nickname']);
$location = mysqli_real_escape_string($connect, $_GET['location']);
$phone = mysqli_real_escape_string($connect, $_GET['phone']);
$cid = mysqli_real_escape_string($connect, $_GET['cid']);


$title = "Modify";
// $insert = "class='active'";
$form_styles = "<link rel='stylesheet' href='css/form.css'>";

include_once "includes/user_info.php";

$rl = "action='./toggle_m.php'";

include_once "templates/header.php";
// include_once "templates/nav.php";
include_once "templates/modify_customer.php";
// include_once "templates/footer.php";


if ($_GET['submit']) {
  $cn = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['cname']));
  $nn = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['nickname']));
  $ln = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['location']));
  $pn = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['phone']));
  $idc = htmlspecialchars(mysqli_real_escape_string($connect, $_GET['cid']));

  $query = "UPDATE customer SET Customer_Name='$cn',Nickname='$nn',Phone='$pn',Location='$ln',Customer_ID='$idc' WHERE Customer_ID='$idc'";

  $data = mysqli_query($connect, $query);

  if ($data) {
    echo "<script>alert('Entry Successfully Updated!');</script>";
  }
?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=customers.php">
<?php


}

function getUserIp()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
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