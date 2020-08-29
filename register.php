<?php
include "./includes/session.php";
include "./includes/DB.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="CharityPress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Aakar Asha</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue-gary.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
    <?php include 'header.php';?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
   
    <!-- Section: home-boxes -->
    

    <!-- Section: About  -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
          <div class="col-md-6 col-md-push-3">
            <form name="reg-form" class="register-form" method="post">
              <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
              </div>
              <hr>
              <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="form_name">Name</label>
                  <input id="form_name" name="form_name" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                  <label>Email Address</label>
                  <input id="form_email" name="form_email" class="form-control" type="email">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_choose_username">Choose Username</label>
                  <input id="form_choose_username" name="form_choose_username" class="form-control" type="text">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="form_choose_password">Choose Password</label>
                  <input id="form_choose_password" name="form_choose_password" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                  <label>Re-enter Password</label>
                  <input id="form_re_enter_password" name="form_re_enter_password"  class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
              </div>
            </form>
          </div>
        </div>
		
		
        </div>
      </div>
    </section>

   
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>