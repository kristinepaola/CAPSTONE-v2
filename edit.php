<?php
	$editElement = $_POST['editElement'];

	if($editElement[1]!= ''){
		include('sql_connect.php');
		
		$row = 'UPDATE organization_details SET  organization_name = "'.$editElement[1].'" WHERE user_id ="'.$editElement[0].'"';
		mysqli_query($sql,$row) or die(mysqli_error($sql));
	}
	header('location:lists_organizations.php');
?>
