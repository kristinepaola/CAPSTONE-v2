<?php
$mysqli = mysqli_connect("localhost", "root", "", "webportal");
/* check connection */

if (!$mysqli) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  echo "ERROR! Connection Failed!";
  exit();
=======
$sql = mysqli_connect("localhost", "root", "", "webportal");
/* check connection */

if (!$sql) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  echo "ERROR! Connection Failed!";
  exit();
>>>>>>> admin
}

?>
