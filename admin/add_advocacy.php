<?php require ("../sql_connect.php"); ?>
<html>
<form method="POST" action="insert_advocacy.php" enctype="multipart/form-data">
  Advocacy Name: <input type="text" name="advocacy"><br>
  Icon:   <input type="file" name ="advocacy_icon"><br>
  <button type="submit">SUBMIT</button>
</form>
</html>
