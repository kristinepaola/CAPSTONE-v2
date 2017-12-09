<?php
require ("../sql_connect.php");
?>
<html>
<body>
  <form method="POST" action="insert_occ_event.php">
    <label>Event Title <small>(required)</small></label>
    <input name="eventTitle" type="text" id="eventTitle" ><br>
    <label>Event Description <small>(required)</small></label>
    <textarea rows ="5" cols="15" name="eventDesc" type="text" id="eventDesc" ></textarea><br>
    <br>
    <label>Location<small>(required)</small></label>
    <input name="eventLocation" type="text" id="eventLocation"><br>
    <br>
    <label>Start <small>(required)</small></label>
    <input name="eventStart" type="datetime-local" id="eventStart">
    <br>
    <label>End<small>(required)</small></label>
    <input name="eventEnd" type="datetime-local" id="eventEnd"><br>
    <br>
    <label>Material Requirement <small>(required)</small></label>
    <textarea rows ="5" cols="15" name="eventMatReq" type="text" id="eventMatReq" ></textarea><br>
    <br>
    <label>Age Requirement <small>(required)</small></label>
    <input name="eventAgeReq" type="number" id="eventAgeReq" ><br>
    <br>
    <label>Gender Requirement<small>(required)</small></label>
    <input name="eventGenderReq" type="text" id="eventGenderReq"><br>
    <div id="container">
      Occupation Name:<input name="occupationName[]" type="text" id="occupation">
      No. of Volunteers:<input name="noVolunteers[]" type="number" id="noVolunteers">
      <a href="#" id="add">Add</a>
    </div>
    <input type="submit" name="submit"/>
  </form>
</body>
</html>
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script>
$(document).ready(function(e){
  //Variables
   var display = '<p/><div id="container">Occupation Name:<input name="occupationName[]" type="text" id="occupation">No. of Volunteers:<input name="noVolunteers[]" type="number" id="noVolunteers"><a href="#" id="delete">Delete</a></div>';
  //Add rows to the form
  $("#add").click(function(){
    $("#container").append(display);
  });
  //Remove
  $("#container").on("click", "#delete", function(){
    $(this).parent("div").remove();
  });


});
</script>
