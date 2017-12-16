<?php
require ("../sql_connect.php");

//duff add image
$file = addslashes(file_get_contents($_FILES["eventImage"]["tmp_name"]));
//ofels code
$addevent_query ="INSERT INTO organization_event VALUES ('',
<<<<<<< HEAD
                                                '31',
=======
                                                '10',
>>>>>>> afd17cbd1463948d1d4aee7eac8741692288088a
                                  '".$_POST['eventTitle']."',
                                  '".$_POST['eventDesc']."',
                                  '".$_POST['eventLocation']."',
                                  '".$_POST['eventStart']."',
                                  '".$_POST['eventEnd']."',
                                  '".$_POST['eventMatReq']."',
                                  '".$_POST['eventAgeReq']."',
                                  '".$_POST['eventGenderReq']."',
                                  '".$_POST['eventPartnership']."',
                                  '$file'
                                  )";

$addevent_data = mysqli_query ($sql, $addevent_query);
   if ($addevent_data)
   {
     header("#");

  }
   else {
    echo $sql->error."<br>";
 }


 // daphne code
 $occupationName = $_POST["occupationName"];
 $noVolunteers = $_POST["noVolunteers"];

 foreach ($occupationName AS $key => $value ){
<<<<<<< HEAD
   $addocc_query = "INSERT INTO occupation_event VALUES ('31',
                                         '31',
                                         '31',
=======
   $addocc_query = "INSERT INTO occupation_event VALUES ('20',
                                         '20',
                                         '20',
>>>>>>> afd17cbd1463948d1d4aee7eac8741692288088a
                                        '".$sql->real_escape_string($value)."',
                                        '".$sql->real_escape_string($noVolunteers[$key])."')";

 $addocc_data = mysqli_query($sql, $addocc_query);
   if ($addocc_data){
   echo "<p>Stored to database</p>";
   }
   else{
     echo $sql->error;
   }
 }
?>
