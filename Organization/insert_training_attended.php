<!-- //Ofels Code -->
<?php
require ("../sql_connect.php");
$addtraining_query ="INSERT INTO training_attended VALUES ('',
                              '".$_POST['trainingAttendedName']."'
                              )";

$addtraining_data =mysqli_query ($sql,$addtraining_query );
if ($addtraining_data)
{
  header("location:trainingAttended.php");

}
else {
 echo $sql->error."<br>";
}


 ?>
