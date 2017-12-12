<?php
require ("../sql_connect.php");
$query = "INSERT INTO organization_event VALUES ('',
                      '".$_POST['eventTitle']."',
                      '".$_POST['eventDesc']."',
                      '".$_POST['eventLocation']."',
                      '".$_POST['eventStart']."',
                      '".$_POST['eventEnd']."',
                      '".$_POST['eventMatReq']."',
                      '".$_POST['eventAgeReq']."',
                      '".$_POST['eventGenderReq']."',
                      '".$_POST['eventOccuptReq']."',
                      '".$_POST['eventnVolunteer']."',
                      '".$_POST['eventTrainingAttend']."',
                      '".$_POST['eventPartnerOrg']."',
                      '".$_POST['eventImage']."'
                      )";

$data = mysqli_query ($sql, $query);
  if ($data)
  {
    header("#");

  }
  else {
    echo "Problem with query";
  }

 ?>
