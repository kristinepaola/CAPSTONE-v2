<?php include("../sql_connect.php"); ?>
<html>
<form method="POST" action="insert_advocacy.php" enctype="multipart/form-data">
  Advocacy Name: <input type="text" name="advocacy"><br>
  Advocacy Icon: <input type="file" name="advocacyicon"><br>
  <button type="submit" name="submit">Submit</button>
</form>
</html>
