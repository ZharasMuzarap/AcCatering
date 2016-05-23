<?php
session_start();
include 'connection.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM `menu` WHERE id='$id'";
	mysql_query($sql);
	header('location: index.php#Third');
}
?>