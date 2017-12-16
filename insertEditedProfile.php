<?php
require("sql_connect.php");
$query = "INSERT INTO volunteer (address, schedule, occupation) VALUES (
					'".$_POST['address']."',
					'".$_POST['schedule']."',
					".$_POST['occupation'].")";

$res = mysqli_query($sql, $query);
if($res){
	header("location:volunteerEditedProfile.php");

}else{
	echo "Problem with sql insert";
}
?>
