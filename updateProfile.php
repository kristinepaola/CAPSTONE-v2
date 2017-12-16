<?php
require ("sql_connect.php");
$query = "UPDATE volunteer SET 	firstName = '".$_POST['firstName']."',
								lastName = '".$_POST['lastName']."',
								address  = '".$_POST['address']."',
								schedule = '".$_POST['schedule']."',
                occupation  = '".$_POST['occupation']."'
								WHERE volunteer_id = ".$_POST['volunteer_id'];

$result = mysqli_query($sql, $query);
if ($result){
	echo '<script>window.location = "volunteerProfile.php"</script>';
}
else{
	echo "Problem in query";
}
?>
