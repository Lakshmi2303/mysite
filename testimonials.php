<?php
include "./includes/session.php";
include "./includes/DB.php";

 $DB = new clsITXDBTr($dbhost, $dbuname, $dbpwd, $dbname, False);

	$SQL_testimonials="SELECT * FROM akar_tbl_testimonials ORDER BY testimonyId DESC";
	$result_testimonials=$DB->doSQL($SQL_testimonials);
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

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue-gary.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

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
  <!--<div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Loading</div>
  </div>-->
  
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
          <div class="col-md-12mb-30">
		  <h1 class="inner-page">Tesimonials</h1>
            <div class="bxslider bx-nav-top">
                <div class="testimonial bg-lightest p-20 mb-15">
                
                <?php 
		  if(mysql_num_rows($result_testimonials)>0){
		  while($row_testimonials=mysql_fetch_object($result_testimonials)){ ?>
                  
                  <div class="content mt-20">
				  <div class="row">
				  <div class="col-md-2">
                  <?php if($row_testimonials->profileimage !=''){ ?>
                   <img width="100%" src="images/<?=$row_testimonials->profileimage?>" alt="" class="img-circle"><?php }else{ ?>
                   <img width="100%" src="images/testimonialdefault.png" alt="" class="img-circle"><?php } ?>
					</div>
				 <div class="col-md-9">
                    <div class="testimonials-details pull-left flip ml-20">
                    <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600"><?php echo ucfirst(stripslashes($row_testimonials->testname));?></h5>
                    <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray"><?php echo ucfirst(stripslashes($row_testimonials->company));?></h6>
                    <p><em><?php echo ucfirst(stripslashes($row_testimonials->testimony));?></em></p>
					<p><em><?php echo ucfirst(stripslashes($row_testimonials->testimonyaddress));?><br><?php $date=date_create($row_testimonials->testmonyDate);
echo date_format($date,"d/m/Y");?></em></p>
                    </div>
				</div>
					</div>
                    <div class="clearfix"></div><br><br>
                  </div>
                  
                  
                  <?php }}else{ echo 'Testimonials will be updated soon';} ?>
				  				  
                </div>
                
                
              </div>
          </div>
        </div>
		
        </div>
      </div>
    </section>

   
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  
  <?php include 'footer.php'; ?>
  </div>
  
  
</body>
</html>