<?php
require("sql_connect.php");
$query = "INSERT INTO volunteer_registration VALUES ('',
					'".$_POST['firstName']."',
					'".$_POST['lastName']."',
          '".$_POST['email']."',
          '".$_POST['pass']."',
					".$_POST['confirmPass'].")";

$res = mysqli_query($sql, $query);
if($res){
	header("location:volunteerProfile.php");

}else{
	echo "Problem with sql insert";
}
?>
