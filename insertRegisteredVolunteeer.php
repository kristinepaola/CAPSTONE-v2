<?php
require("sql_connect.php");
$query = "INSERT INTO volunteer (volunteer_id, firstName, lastName, email, pass) VALUES ('',
					'".$_POST['firstName']."',
					'".$_POST['lastName']."',
          '".$_POST['email']."',
					".$_POST['pass'].")";

$res = mysqli_query($sql, $query);
if($res){
	header("location:volunteerDashboard.php");

}else{
	echo "Problem with sql insert";
}
?>
