<?php
require("sql_connect.php");
$query = "INSERT INTO volunteer_profile VALUES ('',
					'".$_POST['firstName']."',
					'".$_POST['lastName']."',
					'".$_POST['address']."',
					'".$_POST['schedule']."',
					".$_POST['occupation'].")";

$res = mysqli_query($sql, $query);
if($res){
	header("location:viewProfile.php");

}else{
	echo "Problem with sql insert";
}
