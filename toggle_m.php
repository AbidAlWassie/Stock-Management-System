<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
include_once "includes/user_info.php";
if(isset($_POST['submit'])){
  // echo $theme;
  
  if($theme === "disabled") {
    $query="UPDATE accounts SET theme='enabled';";
    $data=mysqli_query($con, $query);
    header("refresh:0");
  } else {
    $reverse="UPDATE accounts SET theme='disabled';";
    $data=mysqli_query($con, $reverse);
    header("refresh:0");
  }
}
?>