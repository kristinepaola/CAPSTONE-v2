<?php
	require ("/sql_connect.php");
	$query = "SELECT * FROM list_trainings";
	$result = mysqli_query($sql, $query);

	$output=array();

	while($row=mysqli_fetch_assoc($result)){
		$output[] = $row;
	}



	echo json_encode($output);
?>
