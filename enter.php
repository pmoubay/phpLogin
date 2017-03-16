<?php

set_include_path('D:xampp/htdocs/phplogin/');
include 'dbh.php';

$username = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE Username='$username' AND Password= '$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
  echo "Username or Password is incorrect!";
} else {
  $_SESSION['sessionid'] = $row['UserID'];
  if (isset(  $_SESSION['sessionid']))
  header("Location: memberwelcome.php");
}
 ?>
