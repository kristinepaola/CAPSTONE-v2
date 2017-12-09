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
$addevent_query ="INSERT INTO organization_event VALUES ('',
                                                '10',
                                  '".$_POST['eventTitle']."',
                                  '".$_POST['eventDesc']."',
                                  '".$_POST['eventLocation']."',
                                  '".$_POST['eventStart']."',
                                  '".$_POST['eventEnd']."',
                                  '".$_POST['eventMatReq']."',
                                  '".$_POST['eventAgeReq']."',
                                  '".$_POST['eventGenderReq']."',
                                  '".$_POST['eventPartnership']."'
                                  )";

$addevent_data = mysqli_query ($sql, $addevent_query);
   if ($addevent_data)
   {
     header("#");

  }
   else {
    echo $sql->error."<br>";
 }

?>
