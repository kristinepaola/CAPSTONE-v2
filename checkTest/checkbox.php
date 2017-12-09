<?php
include ("config.php");
$checkbox = $_POST['check'];
if ($_POST["Submit"]=="Submit")
{
for ($i=0; $i<sizeof($checkbox); $i++) { 
	$query="INSERT INTO employee (name) VALUES ('".$checkbox[$i]."')";
	mysql_query($query) or die(mysql_error());
}
echo "Record Inserted";

}

?>