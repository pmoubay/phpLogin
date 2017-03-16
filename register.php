<?php

set_include_path('D:xampp/htdocs/phplogin/');
include 'dbh.php';
$first = $_POST['fname'];
$last = $_POST['lname'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$username = $_POST['userid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (Fname, Lname, Email, Phone, Username, Password)
        VALUES ('$first','$last','$email','$tel','$username','$pwd')";
$result = mysqli_query($conn, $sql);
header("Location: congrats.php");
 ?>
