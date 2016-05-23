<?php
include 'connection.php';
$id	= $_GET["id"];
$name = $_GET["name"];
$type = $_GET["type"];
	$query = "UPDATE `menu` SET `type`='$type',`name`='$name' WHERE id='$id'";

	mysql_query($query);
	header('location: index.php#Third');
?>