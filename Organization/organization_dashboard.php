<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Philippine Red Cross | Dashboard</title>
<meta name="description" content="GARO is a real-estate template">
<meta name="author" content="Kimarotec">
<meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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

<style>
  .organization_dashboard{
    background-color: #ffffff;
  }
</style>
<body>


<!-- Body content -->



<!--End top header -->

<?php include ("../Header.php"); ?>
<!-- End of nav bar -->

<div class="col-md-12">
  <div class="col-md-8">
    <h2>Welcome Philippine Red Cross</h2>
    <button class="btn btn-success" id="readmore">Add an Event</button>
  </div>
  <div class="col-md-4">
    <h2>Followers</h2>
  </div>
</div>
<div class="col-md-12">
  <div class="col-md-4">
    <h2>Upcoming Activities</h2>
    <div id="list-type" class="proerty-th">
        <div class="col-sm-12 p0">
            <div class="box-two proerty-item">
                <div class="item-thumb">
                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                </div>

                <div class="item-entry overflow">
                    <h5><a href="property-1.html"> Medical Mission </a></h5>
                    <div class="dot-hr"></div>
                    <span class="pull-left"><b> Date:</b> December 8. 2017 </span>
                    <span class="pull-left"><b>Location: </b>Nasipit, Talamban Cebu City Philippines</span>
                    <div class="property-icon">
                      <button class="btn btn-success">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <h2>Feedbacks</h2>
  </div>
  <div class="col-md-4">
    <h3>Calendar</h3>
    <div id='calendar' class='col-sm-12'></div>
    <h3>Past Activities</h3>
  </div>
</div>

<!--MODAL-->
<form id="add">
			<div class="modal fade" tabindex="-1" role="dialog" id="addevent" aria-labelledby="gridSystemModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">









							<h3 class="modal-title">Add A New Event <span class="glyphicon glyphicon-calendar"></h3>
						</div>
						<div class="modal-body">
							<div class='row'>
								<div class='col-sm-6'>
									<span class='input-title'>Event Name:</span>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-9'>
									<input type='text' class='form-control' name='eventname' id='event'>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-6'>
									<span class='input-title'>Date:</span>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-4'>
									<input type='text' class='form-control' name='startdate' id="startdate">
								</div>
								<div class='col-sm-1'>
									<span>to</span>
								</div>
								<div class='col-sm-4'>
									<input type='text' class='form-control' name='enddate' id="enddate">
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-6'>
									<span class='input-title'>Time:</span>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-4'>
									<input type='time' class='form-control' name='starttime' id="starttime">
								</div>
								<div class='col-sm-1'>
									<span>to</span>
								</div>
								<div class='col-sm-4'>
									<input type='time' class='form-control' name='endtime' id="endtime">
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-6'>
									<span class='input-title'>Color</span>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-6'>
									<select name="color" id="eventColor" class='form-control'>
										<option></option>
										<option id = "red"value="#F65314">Red</option>
										<option value="#FAE03C">Yellow</option>
										<option value="#FFBB00">Orange</option>
										<option value="#7CBB00">Green</option>
										<option value="#F7786B">Pink</option>
										<option value="#8a2be2">Purple</option>
										<option value="#a6a6ed">Lavender</option>
										<option value="#45B8AC">Turquoise</option>
									</select>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-6'>
									<span class='input-title'>Details:</span>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-9'>
									<textarea class='form-control' rows="4" cols="50" id="eventdetails" name="eventdetails"></textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" data-dismiss="modal" id="submit">Add Event</button>
							<button class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</form>
<!--END OF MODAL-->

</body>
</html>


<script src="../assets/js/modernizr-2.6.2.min.js"></script>
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap-select.min.js"></script>
<script src="../assets/js/bootstrap-hover-dropdown.js"></script>
<script src="../assets/js/easypiechart.min.js"></script>
<script src="../assets/js/jquery.easypiechart.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/icheck.min.js"></script>
<script src="../assets/js/price-range.js"></script>
<script src="../assets/js/main.js"></script>
