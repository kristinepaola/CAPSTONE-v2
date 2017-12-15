<?php
  require ("../sql_connect.php");
  $dispAdv_query = "SELECT * FROM advocacies";
  $dispAdv_data = mysqli_query ($sql, $dispAdv_query);
  if (!$dispAdv_data){
    "Error in query";
  }
?>
<html>
<head>
  <title>Register Organization</title>
  <style>
  .advicon{
    width: 50px;
    height: 50px;
  }
  </style>
</head>
<body>
  <form method="POST" action="insertOrganization.php">
    Organization Name: <input type="text" name="orgName" required><br>
    Email Address: <input type="email" name="emailAdd" required><br>
    City: <input type="name" name="city" required><br>
    Password: <input type="password" name="password" id="password" required><br>
    Confirm Password: <input type="password" id="confPass"required><small id="warning" class="warning">Password do not match!</small><br>
    Advocacies: <br>
    <?php
      while ($row = mysqli_fetch_array($dispAdv_data)){
        $advicon = $row['advocacy_icon'];
        $img_src = "../admin/advocaciesIcon/".$advicon;
        echo "<input type='checkbox' name = 'advocacy[]' value='".$row['advocacy_name']."'>".$row['advocacy_name']."<br>";
        echo "<img src=".$img_src." class='advicon'>";
      }
    ?>
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</body>
</html>
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script>
  $(document).ready(function(){

    $("#confPass").keyup(function(){
      if ($(this).val () == $("#password").val()){
          $("#warning").addClass('warning');
      } else {
        $("#warning").removeClass('warning');
      }
    });
  });
</script>
