<?php
require ("../sql_connect.php");
$distrainings_query ="SELECT * FROM list_trainings";
$distrainings_data = mysqli_query ($sql, $distrainings_query);
    if (!$distrainings_data)
    {
      echo "error in query";
    }
?>
<html>
<body>
  <form action="insert_occ_event.php" method="POST" enctype="multipart/form-data">
    <label>Image <small>(required)</small></label>
    <input name="eventImage" type="file" id="eventTitle" ><br>
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
    <br>
    <select id="eventGenderReq" name="eventGenderReq">
      <option value="Female">Female</option>
      <option value="Male">Male</option>
      <option value="Both(Female/Male)">Both(Female/Male)</option>
    </select>
    <br>
    <div id="trainingAttended">
        <label>Training / Seminar Attended<small>(required)</small></label>
        <select id="trainingName" name="trainingName[]">
          <?php
          while  ($row =mysqli_fetch_array($distrainings_data))
          {
          echo "<option>".$row['trainingName']."</option>";
          }
           ?>
      </select>
    <a href="#" id="addtrainings">Add</a>
  </div>
    <br>
    <div id="container">
      Occupation Name:<input name="occupationName[]" type="text" id="occupation">
      No. of Volunteers:<input name="noVolunteers[]" type="number" id="noVolunteers">
      <a href="#" id="add">Add</a>
    </div>
    <br>
    <div id="partnership">
       Partnership with Other Organization/s:<input name="eventPartnership" type="text" id="eventPartnerOrg">
         <a href="#" id="addPartnership">Add</a>
  </div>
    <input type="submit" name="submit"/>
  </form>
</body>
</html>
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script>
//ADD  OCCUPATION
$(document).ready(function(){
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

// ADD PARTNERSHIP

  //Variables
   var output = '<p/><div id="partnership">Partnership with Other Organization/s:<input name="eventPartnerOrg" type="text" id="eventPartnership"><a href="#" id="delete">Delete</a></div>';
  //Add rows to the form
  $("#addPartnership").click(function(){
    $("#partnership").append(output);
  });
  //Remove
  $("#partnership").on("click", "#delete", function(){
    $(this).parent("div").remove();
  });

//DROPDOWN TRAINING / SEMINAR

  //Variables

  //Add rows to the form
  // $("#addtrainings").click(function(){
  //   $.ajax({
  //     url: "getListTrainings.php",
  //     method: "POST",
  //     dataType: "json",
  //
  //     success: function (retval){
  //
  //     }
  //   })
  // });
  //
  //
  // 
  // //Remove
  // $("#trainingAttended").on("click", "#minus", function(){
  //   $(this).parent("div").remove();
  // });
});
</script>
