<?php
require ("../sql_connect.php");
//ofels code
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
