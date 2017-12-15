<?php
require ("../sql_connect.php");

//duff add image

$name = $_FILES['eventImage']['name'];

$target_dir = "eventImages/";
$target_file = $target_dir . basename($_FILES['eventImage']['name']);

// select file type
$imagefileType = strtolower (pathinfo($target_file, PATHINFO_EXTENSION));

//valid file extensions
$extensions_arr = array("jpg", "jpeg", "png", "gif");

//ofels code
$addevent_query ="INSERT INTO organization_event VALUES ('',
                                                '',
                                  '".$_POST['eventTitle']."',
                                  '".$_POST['eventDesc']."',
                                  '".$_POST['eventLocation']."',
                                  '".$_POST['eventStart']."',
                                  '".$_POST['eventEnd']."',
                                  '".$_POST['eventMatReq']."',
                                  '".$_POST['eventAgeReq']."',
                                  '".$_POST['eventGenderReq']."',
                                  '".$_POST['trainingAttended']."',
                                  '".$_POST['trainingName']."',
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
   $addocc_query = "INSERT INTO occupation_event VALUES ('',
                                         '',
                                         '',
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
