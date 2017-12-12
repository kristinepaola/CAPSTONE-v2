<!DOCTYPE html>
<?php require ("../sql_connect.php");
      require ("../Header.php")
?>

<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>WEB PORTAL</title>
<meta name="description" content="GARO is a real-estate template">
<meta name="author" content="Kimarotec">
<meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="../assets/css/normalize.css">
<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/fontello.css">
<link href="../assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="../assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
<link href="../css/animate.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/icheck.min_all.css">
<link rel="stylesheet" href="../assets/css/price-range.css">
<link rel="stylesheet" href="../assets/css/owl.carousel.css">
<link rel="stylesheet" href="../assets/css/owl.theme.css">
<link rel="stylesheet" href="../assets/css/owl.transitions.css">
<link rel="stylesheet" href="../assets/css/wizard.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body>

<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 profiel-container">

        <form action="insert_event.php" method="POST" enctype="multipart/form-data">
          <div class="profiel-header">
          <h3>
              <b>CREATE</b> AN EVENT <br>
          </h3>
          <hr>
          </div>
  <div class="clear">
      <div class="col-sm-3 col-sm-offset-1">
          <div class="picture-container">
              <div class="picture">
                  <img src="assets/img/avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                  <input type="file" id="wizard-picture" name="eventImage">
              </div>
              <h6>Choose Picture</h6>
          </div>
      </div>
        <div class="col-sm-6 padding-top-25">
          <label>Event Title <small>(required)</small></label>
          <input name="eventTitle" type="text" id="eventTitle" class="form-control"><br>
          <label>Event Description <small>(required)</small></label>
          <textarea rows ="5" cols="65" name="eventDesc" type="text" id="eventDesc" ></textarea><br>
          <br>
          <label>Location<small>(required)</small></label>
          <input name="eventLocation" type="text" id="eventLocation" class="form-control"><br>
      </div>
  </div>

    <div class="col-sm-6">
      <label>Start <small>(required)</small></label>
      <input name="eventStart" type="datetime-local" id="eventStart" class="form-control"><br>
    </div>
    <div class="col-sm-6">
      <label>End<small>(required)</small></label>
      <input name="eventEnd" type="datetime-local" id="eventEnd" class="form-control"><br>
    </div>
    <div class="col-sm-6">
      <label>Materials Needed</label>
      <textarea rows ="5" cols="65" name="eventMatReq" type="text" id="eventMatReq" ></textarea><br>
    </div>
    <div class="col-sm-6">
      <label>Age Requirement <small>(required)</small></label>
      <input name="eventAgeReq" type="number" id="eventAgeReq" class="form-control"><br>
      <label>Gender Requirement<small> (required)</small></label>
      <br>
      <select id="eventGenderReq" name="eventGenderReq" class="form-control">
        <option value="Female">Female</option>
        <option value="Male">Male</option>
        <option value="Both(Female/Male)">Both(Female/Male)</option>
      </select>
      <br>
    </div>
    <div class="col-sm-12 padding-top-25">
      <div id="trainingAttended" class="col-sm-6">
          <label>Training/Seminar Attended</label>
          <br>
          <select id="trainingName" name="trainingName[]" class="form-control">
            <option>ambot</option>
          </select>
          <a href="#" id="addtrainings" class="btn btn-success">+</a>
      </div>
    </div>
    <div class="col-sm-6 padding-top-25" id="container">
      <label>Occupation Name:</label>
      <input name="occupationName[]" type="text" id="occupation" class="form-control">
      <label>No. of Volunteers:</label><input name="noVolunteers[]" type="number" id="noVolunteers" class="form-control">
      <a href="#" id="add" class="btn btn-success">+</a>
    </div>
    <div class="col-sm-6 padding-top-25" id="partnership">
       Partnership with Other Organization/s:<input name="eventPartnership" type="text" id="eventPartnerOrg" class="form-control">
         <a href="#" id="addPartnership" class="btn btn-success">+</a>
    </div>
</div>


<div class="col-sm-5 col-sm-offset-1" align="right">
<br>
<input type='submit' class='btn btn-finish btn-primary' name='submit' value='submit' />
</div>
<br>
</form>

</div>
</div>

</div>
</div>




</body>
</html>
<script src="../assets/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="../assets/js//jquery-1.10.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap-select.min.js"></script>
<script src="../assets/js/bootstrap-hover-dropdown.js"></script>
<script src="../assets/js/easypiechart.min.js"></script>
<script src="../assets/js/jquery.easypiechart.min.js"></script>
<script src=../"assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/icheck.min.js"></script>

<script src="../assets/js/price-range.js"></script>
<script src="../assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/wizard.js"></script>

<script src="../assets/js/main.js"></script>
<script>
//ADD  OCCUPATION
$(document).ready(function(){
  //Variables
   var display = '<label>Occupation Name:</label><input name="occupationName[]" type="text" id="occupation" class="form-control"><label>No. of Volunteers:</label><input name="noVolunteers[]" type="number" id="noVolunteers" class="form-control"><a href="#" id="add" class="btn btn-danger">-</a>';
  //Add rows to the form
  $("#add").click(function(){
    $("#container").append(display);
  });
  //Remove
  $("#container").on("click", "#delete", function(){
    $(this).parent("div").remove();
  });i
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

});
</script>
