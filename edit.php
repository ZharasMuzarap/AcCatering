<?php
include 'connection.php';
$id = $_GET["id"];
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<form method = "get" action="update.php">
Name: <input type="text" name="name" value="<?= $row["name"] ?>"/><br/>
Surname: <input type="text" name="surname" value="<?= $row['surname'] ?>"/><br/>
Card No.: <input type="number" name="card" value="<?= $row['card'] ?>"/><br/>
Password: <input type="text" name="password" value="<?= $row['password'] ?>"/><br/>
<input type="hidden" name="id" value="<?= $row['id'] ?>"/><br/>
<input type="submit" value="Change"/>
</form>