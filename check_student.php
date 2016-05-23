<?php
include 'connection.php';
session_start();
$card = $_GET['card'];
$password = $_GET['password'];
	$query = "SELECT * FROM users WHERE card='$card'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if ($row['card']==$card) {
		if ($password!=$row['password']){
			?><script type="text/javascript">
			alert ("Your password is not correct!");
			</script>
			<?php
			header('location:login.php');
	}else{
		$_SESSION['id'] = $row['id'];
		header("location: user_page.php");
		}
	}else{
			?><script type="text/javascript">alert ("There is no such login!");
				</script>
			<?php
			header('location:login.php');
	}
?>