<?php
require("sql_connect.php");
$query = "INSERT INTO volunteer_registration (volunteer_id, firstName, lastName, emailAdd, pass) VALUES ('',
					'".$_POST['firstName']."',
					'".$_POST['lastName']."',
          '".$_POST['email']."',
					".$_POST['pass'].")";

$res = mysqli_query($sql, $query);
if($res){
	header("location:editProfile.php?volId=4");

}else{
	echo "Problem with sql insert";
}
?>
