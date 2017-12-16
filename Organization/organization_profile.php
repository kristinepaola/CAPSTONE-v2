 <?php
require ("../sql_connect.php");
include ("../organization_header.php");
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
<title>Organization | Profile</title>
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



<div class="col-md-12">
  <div class="col-md-8">
    <h2>Welcome Philippine Red Cross</h2>
  </div>
  <div class="col-md-4">
    <h2><strong>Mission</strong></h2>
  </div>
</div>
<div class="col-md-12">
  <div class="col-md-4">
    <h2><strong>Upcoming Activities</strong></h2>
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
                      <!-- Modal -->
                    <div class="property-icon">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#readMore">Read More</button>
                     
                      <div class="modal fade" id="readMore" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Read More</h4>
                            </div>
                            <div class="modal-body">
                              <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <h2><strong>Recent Activities</strong></h2>
		<div id="list-type" class="proerty-th">
        <div class="col-sm-12 p0">
            <div class="box-two proerty-item">
                <div class="item-thumb">
                    <a href="#" ><img src="../assets/img/demo/#.jpg"></a>
                </div>

                <div class="item-entry overflow">
                    <h5><a href="#"> Feeding </a></h5>
                    <div class="dot-hr"></div>
                    <span class="pull-left"><b> Date:</b> December 25 2017 </span>
                    <span class="pull-left"><b>Location: </b>Mabolo Cebu City Philippines</span>
                    <div class="property-icon">
                      <button class="btn btn-success">Give Feedbacks</button>
                      <!-- Modal -->
                    <div class="property-icon">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#readMore">Read More</button>
                     
                      <div class="modal fade" id="readMore" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Read More</h4>
                            </div>
                            <div class="modal-body">
                              <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

    <h3>Feedbacks</h3>
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
<!-- MODAL -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
