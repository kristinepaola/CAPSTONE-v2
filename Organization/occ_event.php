<?php

?>
<html>
<body>
  <form method="POST">
    <label>Event Title <small>(required)</small></label>
    <input name="eventTitle" type="text"  >
    <div id="container">
      Occupation Name:<input name="occupationName" type="text" id="occupation">
      No. of Volunteers:<input name="noVolunteers" type="number" id="noVolunteers">
      <a href="#" id="add">Add</a>
    </div>
    <input type="submit" name="submit"/>
</body>
</html>
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script>
$(document).ready(function(){
  //Variables
   var display = '<p/><div id="container">Occupation Name:<input name="occupationName" type="text" id="occupation">No. of Volunteers:<input name="noVolunteers" type="number" id="noVolunteers"><a href="#" id="delete">Delete</a></div>';
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
