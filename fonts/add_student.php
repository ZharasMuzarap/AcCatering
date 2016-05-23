<?php
session_start();
include 'connection.php';

$card = $_GET['card'];
$password = $_GET['password'];
$name = $_GET['name'];
$surname = $_GET['surname'];
mysql_query("INSERT INTO `users` (`card`, `password`, `name`, `surname`) VALUES ('$card','$password','$name','$surname')");
header('location: user_page.php?page=std');
?>
