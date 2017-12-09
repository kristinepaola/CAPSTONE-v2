<?php
require ("sql_connect.php");
$query = "UPDATE volunteer_profile SET 	vol_firstName = '".$_POST['firstName']."',
								vol_lastName = '".$_POST['lastName']."',
								vol_address  = ".$_POST['address'].",
								vol_sched = ".$_POST['schedule'].",
                vol_occupation  = ".$_POST['occupation']."
								WHERE mat_id = ".$_POST['materialID'];

$result = mysqli_query($sql, $query);
if ($result){
	echo '<script>window.location = "volunteerProfile.php"</script>';
}
else{
	echo "Problem in query";
}
?>
