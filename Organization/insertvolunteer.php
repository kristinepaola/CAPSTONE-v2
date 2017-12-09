<?php
require ("../sql_connect.php");
$query = "INSERT INTO volunteer_registration VALUES ('',
									   '".$_POST['firstName']."',
									   '".$_POST['lastName']."',
									   '".$_POST['emailAdd']."',
									   '".$_POST['password']."',
									   '".$_POST['confirmPass']."'
									    )";

	 $data = mysqli_query ($sql, $query);
	 if ($data)
	 {
		 header("#");
	 }
	 else
	 {
		 echo "Problem with query<br>";
	 }
?>
