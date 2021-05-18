<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title>About | Created by Abid Al Wassie</title>
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/nav.css">
  <!-- <link rel="stylesheet" href="fonts/stylesheet.css"> -->
  <style>
    body {
      background: #1b4bb4;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      color: white;
    }

    body {
      margin: 0;
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

    .navbar a:hover {
      text-decoration: underline;
    }

    .danger {
      color: white !important;
      background-color: red !important;
      /* padding: auto 1.5px; */
    }
  </style>
  <link rel="shortcut icon" href="img/dollar.png">
</head>
<body>

<?php

include_once "includes/user_info.php";
$rl = "action='./toggle_a.php'";

$about = "class='active'";
include_once "templates/nav.php";

?>

  <div class="container">
    <h1>About</h1>
    <p>Created by <a href="https://github.com/AbidAlWassie/">Abid Al Wassie</a></p>
    <p>Email: <a href="mailto:abidalwassie@outlook.com">abidalwassie@outlook.com</a></p>
    <p>Site: <a href="http://abidalwassie.netlify.app/">abidalwassie.netlify.app</a></p>
  </div>
</body>
<?php 
error_reporting(0);
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
</html>

