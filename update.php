<?php
include 'connection.php';
$id	= $_GET["id"];
$name = $_GET["name"];
$surname = $_GET["surname"];
$card = $_GET["card"];
$password = $_GET["password"];
	$query = "UPDATE `users` SET `card`='$card',`password`='$password',`name`='$name',`surname`='$surname' WHERE id='$id'";

	mysql_query($query);
	header("location: user_page.php?page=std");
?>
