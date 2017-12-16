<?php
require ("sql_connect.php")
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
<title>Create Profile</title>
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
</button>
</div>
</nav>
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
<div class="container">
<h1 class="page-title"><center>Create Your Profile</center></h1>
<div class="clearfix" >
<div class="wizard-container">

<div class="wizard-card ct-wizard-orange" id="wizardProperty">
<form action="" method="">
<div class="wizard-header">
</div>

<ul>
<li><a href="#step1" data-toggle="tab">Step 1 </a></li>
<li><a href="#step2" data-toggle="tab">Step 2 </a></li>
<li><a href="#step3" data-toggle="tab">Step 3 </a></li>
<li><a href="#step4" data-toggle="tab">Finished </a></li>
</ul>

<div class="tab-content">

<div class="tab-pane" id="step1">
<div class="row p-b-15">
<div class="col-sm-4 col-sm-offset-1">
    <div class="picture-container">
        <div class="picture">
            <img src="assets/img/default-property.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
            <input type="file" id="wizard-picture">
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label>Address <small>*required</small></label>
        <input type="text" class="form-control" name="address" >
    </div>

    <div class="form-group">
        <label>Preferred Schedule for Volunteering <small>*required</small></label>
        <input type="text" class="form-control" name="schedule" >
    </div>
    <div class="form-group">
        <label>Occupation </label>
        <input type="text" class="form-control" name="occupation">
    </div>
</div>
</div>
</div>
<!--  End step 1 -->

<div class="tab-pane" id="step2">
<h4 class="info-text"> Select Advocacies </h4>
<div class="row">
<div class="col-sm-12">
    <div class="col-sm-12">
    </div>
</div>

<div class="col-sm-12">
    <div class="col-sm-3">
        <div class="form-group">
        </div>
    </div>
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3">
    </div>
</div>
<div class="col-sm-12 padding-top-15">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    </div>
</div>
<div class="col-sm-12 padding-top-15">
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Swimming Pool
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 2 Stories
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Emergency Exit
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Fire Place
                </label>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12 padding-bottom-15">
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Laundry Room
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Jog Path
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Ceilings
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Dual Sinks
                </label>
            </div>
        </div>
    </div>
</div>
<br>
</div>
</div>
<!-- End step 2 -->

<div class="tab-pane" id="step3">
<h4 class="info-text">Give us somme images and videos ? </h4>
<div class="row">
<div class="col-sm-6">
    <div class="form-group">
        <label for="property-images">Chose Images :</label>
        <input class="form-control" type="file" id="property-images">
        <p class="help-block">Select multipel images for your property .</p>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label for="property-video">Property video :</label>
        <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
    </div>

    <div class="form-group">
        <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
    </div>

    <div class="form-group">
        <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
    </div>
</div>
</div>
</div>
<!--  End step 3 -->


<div class="tab-pane" id="step4">
<h4 class="info-text"> Finished and submit </h4>
<div class="row">
<div class="col-sm-12">
    <div class="">
        <p>
            <label><strong>Terms and Conditions</strong></label>
            By accessing or using  GARO ESTATE services, such as
            posting your property advertisement with your personal
            information on our website you agree to the
            collection, use and disclosure of your personal information
            in the legal proper manner
        </p>

        <div class="checkbox">
            <label>
                <input type="checkbox" /> <strong>Accept termes and conditions.</strong>
            </label>
        </div>

    </div>
</div>
</div>
</div>
<!--  End step 4 -->

</div>

<div class="wizard-footer">
<div class="pull-right">
<input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
<a href="volunteerHome.php"><input type='button' class='btn btn-finish btn-primary ' name='finish' value='Finish' /></a>
</div>

<div class="pull-left">
<input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' />
</div>
<div class="clearfix"></div>
</div>
</form>
</div>
<!-- End submit form -->
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
