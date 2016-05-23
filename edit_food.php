<?php
include 'connection.php';
$id = $_GET["id"];
$query = "SELECT * FROM `menu` WHERE id='$id'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<form method = "get" action="update_food.php">
Name: <input type="text" name="name" value="<?= $row["name"] ?>"/><br/>
Type: <input type="text" name="type" value="<?= $row['type'] ?>"/><br/>
<input type="hidden" name="id" value="<?= $row['id'] ?>"/><br/>
<input type="submit" value="Change"/>
</form>