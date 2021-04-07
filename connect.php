<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "stock-table";
$db_port = 3307;

$connect = mysqli_connect($host, $user, $password, $db_name, $db_port);

if ($connect) {
  echo "Succesfully Connected!";
} else {
  echo "Connection Failed".mysqli_connect_error();
}
?>