<?php
include 'connection.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM `message` WHERE id='$id'";
	mysql_query($sql);
	header('location: user_page.php?page=msg');
}
?>