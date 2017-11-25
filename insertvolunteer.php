<?php
require ("sql_connect.php");
if (isset($_POST["signup"])){
  $file = addslashes(file_get_contents($_FILES["profilePicture"]["tmp_name"]));

  $query = "INSERT INTO volunteer_registration VALUES ('',
                                              '".$_POST['firstName']."',
                                              '".$_POST['lastName']."',
                                              '".$_POST['emailAdd']."',
                                              '".$_POST['password']."',
                                              '".$_POST['confirmPass']."',
                                              '$file',
                                              NOW()
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
