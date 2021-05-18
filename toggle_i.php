<?php
session_start();
// Check if the user isn't logged in then redirect to the index page
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
    header("location: insert.php");
  } else {
    $reverse="UPDATE accounts SET theme='disabled';";
    $data=mysqli_query($con, $reverse);
    header("location: insert.php");
  }
}
?>