<?php require ("../sql_connect.php"); ?>
 <html>
 <body>
   <form action="insert_training_attended.php" method="POST">
     <br>
     <div class="form-group">
         <label>Training / Seminar Attended: <small>(required)</small></label>
         <input name="trainingAttendedName" type="text" class="form-control" >
     </div>
     <br>
 <input type='submit' name='submit' value='submit' />
   </form>
 </body>
 </html>
