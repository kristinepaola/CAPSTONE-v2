<?php
require ("../sql_connect.php");
if (isset($_POST["submit"])){
  $file = addslashes(file_get_contents($_FILES["advocacyicon"]["tmp_name"]));
  $query = "INSERT INTO advocacies VALUES ('',
                                              '".$_POST['advocacy']."',
                                              '$file'
                                                    )";
  $data = mysqli_query($sql, $query);
  if ($data){
    echo "<script>alert('Data inserted to Database')</script>";
  }
  else{
    echo "<script>alert('Error in query')</script>";
  }
}

?>
