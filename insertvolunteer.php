<?php
require ("/sql_connect.php");
if (isset($_POST['signup'])){


$file = addslashes(file_get_contents($_FILES["profilePicture"]["tmp_name"]));


	$query = "INSERT INTO volunteer_registration VALUES ('',
										   '".$_POST['firstName']."',
										   '".$_POST['lastName']."',
										   '".$_POST['emailAdd']."',
										   '".$_POST['password']."',
										   '".$_POST['confirmPass']."'.,
											 '".$file."'
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
}


?>
