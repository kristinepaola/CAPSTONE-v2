<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> AMBOT | Home page</title>
  <meta name="description" content="A web portal for Non Profit Organizations and Local Volunteers">
  <meta name="author" content="Capstone Mamshies">
  <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/fontello.css">
  <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
  <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>


<nav class="navbar navbar-default ">
  <div class="container">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="" alt=""></a>
    </div>


    <div class="collapse navbar-collapse yamm" id="navigation">
        <div class="button navbar-right">
            <a href="/capstone/CAPSTONE-v2/login.php"><button class="navbar-btn nav-button wow bounceInRight login" id="login">Login</button></a>
            <button class="navbar-btn nav-button wow fadeInRight" id="register" >Register</button>
        </div>
        <ul class="main-nav nav navbar-nav navbar-right">
        	<li class="wow fadeInDown"><a class="" href="index.php">Home</a></li>
        	<li class="wow fadeInDown"><a class="" href="">About Us</a></li>
        	<li class="wow fadeInDown"><a class="" href="events.php">Events</a></li>
        	<li class="wow fadeInDown"><a class="" href="">Organizations</a></li>
        </ul>
    </div>
  </div>
</nav>
<!-- MODAL FOR REGISTRATION -->
<div id="regmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="info-text">Register Now!</h3>
        </div>
        <div class="modal-body">
          <div class="row" style="margin:6px;">
            <center><a href="volunteer/register_volunteer.php"><button class="btn btn-warning" id="volunteer">Register as a Volunteer</button></a></center>
          </div>
          <div class="row" style="margin:6px;">
            <center><a href="organization/register_organization.php"><button class="btn btn-warning" id="organization">Register as an Organization</button></a></center>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
        </div>
      </div>
  </div>
</div>

</body>
</html>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#register").on("click", function(){
      $("#regmodal").modal();
    });
  });
</script>
