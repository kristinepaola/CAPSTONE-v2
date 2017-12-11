<?php
<<<<<<< HEAD

$sql = mysqli_connect ("localhost", "root", "", "webportal");

if (!$sql){
	echo "Error connecting to database<br>";
=======
$mysqli = mysqli_connect("localhost", "root", "", "webportal");
/* check connection */

if (!$mysqli) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  echo "ERROR! Connection Failed!";
  exit();
>>>>>>> duff-
}

?>
