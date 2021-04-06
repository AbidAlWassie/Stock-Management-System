<?php

$servername = "localhost";
$username = "root";
$password = "Super Zero44";
$dbname = "stock-table";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
  echo "Hello!";
}

?>