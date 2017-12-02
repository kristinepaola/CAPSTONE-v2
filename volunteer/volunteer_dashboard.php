<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Philippine Red Cross | Dashboard</title>
<meta name="description" content="GARO is a real-estate template">
<meta name="author" content="Kimarotec">
<meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

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

<style>
  .modalimg{
    width: 60px;
    height: 60px;
    border: solid 1px;
  }
</style>
</head>


<body>

<?php include ("../Header.php"); ?>
<!-- End of nav bar -->

<div class="container">
  <div class="col-md-7">
    <div class="col-md-12">
      <div class="row">
        <h1>Welcome Mary Eunice</h1>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <h4 class="text-center">PERSONAL ADVOCACIES</h4>
      </div>
      <div class="row">
        <h4>YOUR UPCOMING ACTIVITIES</h4>
      </div>
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
          <span>ABS CBN RELIEF CAMPAIGN</span>
          <br>
          <span>By: <a href="#">Philippine Redcross</a></span>
          <br>
          <span><a href="#">Talamban Barangay Hall</a></span>
          <br>
          <button class="btn btn-success" id="readmore">Read More</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="col-md-12">
      <h3>Recent Activities</h3>
      <div class="col-md-3">
      </div>
      <div class="col-md-9">
        <span>ABS CBN Relief Campaign</span>
        <br>
        <span>February 28, 2017</span>
        <br>
        <span>Jagobiao Mandaue</span>
      </div>
    </div>
    <div class="col-md-12">
      <h4>Recommended Activities For You</h4>
      <div class="col-md-3">
      </div>
      <div class="col-md-9">
        <span>ABS CBN Relief Campaign</span>
        <br>
        <span>February 28, 2017</span>
        <br>
        <span>Jagobiao Mandaue</span>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="col-md-12">
      <h4 class="text-center">Following</h4>
    </div>
    <div class="col-md-12">
      <h4 class="text-center">Calendar</h4>
    </div>
  </div>

</div>
<!-- READ MORE MODAL-->
<div class="modal fade" id="eventsreadmore" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ABS CBN Relief Campaign</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-6">
          <img src="../assets/img/forproject/1.jpg" class="modalimg"> 
        </div>
        <div class="col-md-6">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>
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
<script>
  $(document).ready(function(){
    $("#readmore").on("click", function(){
      $("#eventsreadmore").modal();
    });
  });
</script>
