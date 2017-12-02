<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> AMBOT | Home page</title>
    <meta name="description" content="Web Portal for local volunteers">
    <meta name="author" content="">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/fontello.css">
    <link href="/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="/assets/css/price-range.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
  </head>
  <body>
  <?php include("Header.php") ?>
    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">(INSERT TITLE HERE) / Sign in </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->


    <!-- register-area -->
    <div class="register-area" style="background-color: rgb(249, 249, 249);">
        <div class="container">

            <div class="col-md-6 col-sm-offset-3">
                <div class="box-for overflow">
                    <div class="col-md-12 col-xs-12 login-blocks">
                        <h2>Login : </h2>
                        <form id="formSubmission" action="check.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="id1" name="id[]">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="id2" name="id[]">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default" onclick="SubmitForm()">Log in</button>
                            </div>
                        </form>
                        <br>

                        <h2>Social login :  </h2>

                        <p>
                        <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a>
                        <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
  </body>
</html>

<!-- End of nav bar -->
<script>

  function SubmitForm(){
	    var y;
	    var max=2;

	    for(y=0 ; y != max && document.getElementById('id'+y).value != '';y++){}

	    if(y == max){
            document.getElementById('formSubmit').click();
        }
	}

</script>

  <!-- Footer area-->


</body>
</html>
