<!DOCTYPE html>
<!-- branch ni ni daphne -->
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> AMBOT | Home page</title>
  <meta name="description" content="GARO is a real-estate template">
  <meta name="author" content="Kimarotec">
  <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/fontello.css">
  <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
  <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/icheck.min_all.css">
  <link rel="stylesheet" href="assets/css/price-range.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

<div id="preloader">
<div id="status">&nbsp;</div>
</div>
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
            <button class="navbar-btn nav-button wow bounceInRight login" id="login">Login</button>
            <button class="navbar-btn nav-button wow fadeInRight" id="register" >Register</button>
        </div>
        <ul class="main-nav nav navbar-nav navbar-right">
        	<li class="wow fadeInDown"><a class="" href="index.html">Home</a></li>
        	<li class="wow fadeInDown"><a class="" href="">About Us</a></li>
        	<li class="wow fadeInDown"><a class="" href="">Events</a></li>
        	<li class="wow fadeInDown"><a class="" href="">Organizations</a></li>
        </ul>
    </div>
  </div>
</nav>

<!-- SIGN UP MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="signUp" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" aria-label="Close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Sign Up Now!</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <button class="btn btn-reg" id="volunteer">
              <h4><a href="#">Register as a Volunteer</a></h4>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <button class="btn btn-reg" id="organization">
              <h4><a href="#">Register your Non Profit Organization</a></h4>
            </button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-nav" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- SIGN UP MODAL -->



<!-- LOG IN MODAL -->
<div class="modal fade" tabindex="-1" role="dialog" id="logIn" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" aria-label="Close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Log In</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h5>Email:</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <input type='email' class='form-control' name='emailadd' id='email'>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h5>Password:</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <input type='password' class='form-control' name='password' id='password'>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <button type="submit" class="nav-button.login" data-dismiss="modal" id="login">Log In</button>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <center>Not yet registered?</center>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <center>Sign up <u><a href="#">HERE</a></u></center>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-nav" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- LOG IN MODAL -->



</body>
</html>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>

	$(document).ready(function(){
		$("#register").on("click", function(){
			$("#signUp").modal();
		});

		$("#login").on("click", function(){
			$("#logIn").modal();
		});
	});

</script>
