<!DOCTYPE html>
<?php require ("sql_connect.php"); ?>

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


<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/fontello.css">
<link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/icheck.min_all.css">
<link rel="stylesheet" href="assets/css/price-range.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/wizard.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


<?php include ("Header.php"); ?>
<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
  <div class="container">
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1 profiel-container">

              <form action="insertvolunteer.php" method="POST" enctype="multipart/form-data">
                  <div class="profiel-header">
                      <h3>
                          <b>CREATE</b> AN EVENT <br>

                      </h3>
                      <hr>
                  </div>

                  <div class="clear">
                      <div class="col-sm-12 padding-top-25">
                          <div class="col-sm-5 padding-top-25">
                            <div class="form-group">
                                <label>Event Title <small>(required)</small></label>
                                <input name="eventTitle" type="text" class="form-control" >
                            </div>
                          </div>
                          <div class="col-sm-4 padding-top-25">
                            <div class="form-group">
                                <label>Location<small>(required)</small></label>
                                <input name="eventTitle" type="text" class="form-control" >
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-12 padding-top-25">
                          <div class="col-sm-5 padding-top-25">
                            <div class="form-group">
                                <label>Start <small>(required)</small></label>
                                <input name="start" type="date" class="form-control" >
                            </div>
                          </div>
                          <div class="col-sm-5 padding-top-25">
                            <div class="form-group">
                                <label>End<small>(required)</small></label>
                                <input name="end" type="date" class="form-control" >
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-12 padding-top-25">
                          <div class="col-sm-3 padding-top-25">
                            <div class="form-group">
                                <label>Age Requirement <small>(required)</small></label>
                                <input name="ageReq" type="text" class="form-control" >
                            </div>
                          </div>
                          <div class="col-sm-4 padding-top-25">
                            <div class="form-group">
                                <label>Gender Requirement<small>(required)</small></label>
                                <input name="genderReq" type="text" class="form-control" >
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-12 padding-top-25">
                          <div class="col-sm-3 padding-top-25">
                            <div class="form-group">
                                <label>No. of Volunteers <small>(required)</small></label>
                                <input name="nVolunteers" type="number" class="form-control" >
                                <div class="col-sm-12 padding-top-25" style="padding-left:50px">
                                  <label>Occupation <small>(required)</small></label>
                                  <input name="occupation" type="text" class="form-control" >
                                </div>
                            </div>
                          </div>
                      </div>


                  </div>


                  <div class="col-sm-5 col-sm-offset-1" align="right">
                      <br>
                      <input type='submit' class='btn btn-finish btn-primary' name='signup' value='SIGN UP' />
                  </div>
                  <br>
          </form>

      </div>
  </div>

</div>
</div>

<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="assets/js//jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.js"></script>
<script src="assets/js/easypiechart.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/icheck.min.js"></script>

<script src="assets/js/price-range.js"></script>
<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/wizard.js"></script>

<script src="assets/js/main.js"></script>


</body>
</html>
