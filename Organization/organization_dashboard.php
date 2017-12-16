<?php
require ("../sql_connect.php");
include ("../organization_header.php");

$displaycalendar_query = "SELECT * FROM organization_event";
$displaycalendar_data = mysqli_query($sql, $displaycalendar_query);
if(!$displaycalendar_data){
	echo "ERROR IN QUERY!";
	exit();

}
?>

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


<link rel='stylesheet' href='../fullcalendar/fullcalendar.min.css'/>
</head>

<style>
  .organization_dashboard{
    background-color: #ffffff;
  }
</style>
<body>


<!-- Body content -->



<!--End top header -->



<div class="col-md-12">
  <div class="col-md-8">
    <h2>Welcome Philippine Red Cross</h2>
    <a href="create_event.php"><button class="btn btn-success" id="readmore" >Add an Event</button></a>
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
                    <a href="property-1.html" ><img src="../assets/img/demo/#.jpg"></a>
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
    <div id='calendar' class='col-sm-12'>

	</div>
    <h3>Past Activities</h3>
  </div>
</div>



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

<script src='../fullcalendar/lib/jquery.min.js'></script>
<script src='../fullcalendar/lib/moment.min.js'></script>
<script src='../fullcalendar/fullcalendar.min.js'></script>


<script>
$(document).ready(function(){

	$("#calendar").fullCalendar({
		header: {
	        left: 'prev,next todayZZ',
	        center: 'title',

	   	},


		editable: false,
		dropabble: false,
		selectable: true,
		selectHelper: false,
		eventLimit: true,


	});
});
</script>
