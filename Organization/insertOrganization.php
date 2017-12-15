<?php
require ("../sql_connect.php");

if (isset($_POST['advocacy'])){
  $checkedAdv = $_POST['advocacy'];
  $impAdv = array();
  foreach($checkedAdv as $advocacies){
    $impAdv[] = $advocacies;
  }

  $insertAdv = implode (", ", $impAdv);

}else{
  echo "select at least 1 advocacy";
}


$query = "INSERT INTO organization VALUES ('',
                          '".$_POST['orgName']."',
                          '".$_POST['emailAdd']."',
                          '".$_POST['city']."',
                          '".$_POST['password']."',
                          '$insertAdv'
                          )";

$data = mysqli_query($sql, $query);
if (!$data){
  echo "ERROR IN QUERY";
}else{
  echo "Organization successfully registered";
}

?>
