<?php
require ("../sql_connect.php");

$occupationName = $_POST["occupationName"];
$noVolunteers = $_POST["noVolunteers"];

foreach ($occupationName as $key => $value){
  $addocc_query = "INSERT INTO occupation_event VALUES ('',
                                      '".sql->.real_escape_string($value)"',
                                      ''".sql->.real_escape_string($noVolunteers[$key])"')";

$addocc_data = mysqli_query($sql, $addocc_query);
if ($insert){
  echo "<p>Stored to database</p>";
}
else{
  echo $mysqli->error;
}
}
?>
