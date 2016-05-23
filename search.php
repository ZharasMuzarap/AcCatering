<?php 
	include 'connection.php';
	$output = '';
	$sql = "SELECT * FROM `users` WHERE name LIKE '%".$_POST['search']."%' OR surname LIKE '%".$_POST['search']."%'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0){
		$output .= '<div">
		<table>';
		
	while ($row = mysql_fetch_array($result)) {
		if($row['id']!=1){
		$output .= "
			<tr>
				<td>".$row['name']."</td>
				<td>".$row['surname']."</td>
				<td>".$row['card']."</td>
			</tr>";
		}
	}
	$output .= '</table>
	</div>';

	echo "$output";
	}else{
		echo "DATA NOT FOUND";
	}
 ?>