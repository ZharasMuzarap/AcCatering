<?php
include 'connection.php';
$query = "SELECT * FROM `cars` ORDER BY price";
$result = mysql_query($query);
$num = mysql_num_rows($result);
for ($i=0;$i<$num;$i++){
	$row = mysql_fetch_array($result);
	?>
	<?= $row["man"]?>
	<?= $row["model"]?>
	<?= $row["price"]?>
	<?= $row["phone"]?>
	<?= $row["year"]?>
	<a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
	<a href="edit.php?id=<?= $row['id']?>">Edit</a> <br/>
<?php
}
?>
