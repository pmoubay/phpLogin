<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="reformusers"; // Database name
$tbl_name="user"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$first = $_POST['fname'];
$last = $_POST['lname'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$username = $_POST['userid'];
$pwd = $_POST['pwd'];


 ?>
