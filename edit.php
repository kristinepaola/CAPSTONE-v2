<?php
	$editElement = $_POST['editElement'];

	if($editElement[1]!= '' && $editElement[2] !=''){
		include('sql_connect.php');
		$row = 'UPDATE user SET first_name ="'.$editElement[1].'" , last_name = "'.$editElement[2].'" WHERE account_id ="'.$editElement[0].'"';
		mysqli_query($sql,$row) or die(mysqli_error($sql));

	}
	header('location:lists_volunteers.php');
?>
