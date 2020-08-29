<?php
include "./includes/session.php";
include "./includes/DB.php";

 $DB = new clsITXDBTr($dbhost, $dbuname, $dbpwd, $dbname, False);
 
$defId=$_GET['defId'];
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
    <div id="disable-preloader" class="btn btn-default btn-sm">Loading</div>
  </div>
  
  <!-- Header -->
    <?php include 'header.php';?>

  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <div class="inner-banner-1"></div>

    <!-- Section: home-boxes -->
    

    <!-- Section: About  -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row text-justify">
		   <div class="col-md-3">
		   <h2 class="sub-head">TYPE OF SURGERIES</h2>
		   <div class="type-of-surgeries-main">
			<?php
		$query_defecttype ="SELECT * FROM akar_tbl_defecttype WHERE deftypeStatus = 1";
		$res_defecttype = $DB->doSQL($query_defecttype);
		while($row_defecttype = mysql_fetch_object($res_defecttype)){

			?>
            <h3><?=$row_defecttype->defectType?></h3>
			<ul>
			<?php
		$query_defect ="SELECT * FROM akar_tbl_defect WHERE defectStatus = 1 AND deftypeId= '$row_defecttype->deftypeId'";
		$res_defect = $DB->doSQL($query_defect);
		while($row_defect = mysql_fetch_object($res_defect)){
			?>
              <li><a href="surgery-content.php?defId=<?=$row_defect->defectId?>"><?=$row_defect->defectTitle?></a></li>
			<?php } ?>
            </ul>
			
			<?php } ?>
		   </div>
		   
		   </div>
  <div class="col-md-6">
  <?php
  		$query_defect ="SELECT * FROM akar_tbl_defect WHERE defectStatus = 1 AND defectId= '$defId'";
		$res_defect = $DB->doSQL($query_defect);
		$row_defect = mysql_fetch_object($res_defect);
		$htitle = $row_defect->defectTitle;

  ?>
  <h1 class="inner-page"><?=$htitle?></h1>
  <?php if($row_defect->defectBanner1 !='' || $row_defect->defectBanner2 !='' || $row_defect->defectBanner3 !=''){ ?>
  
  <div class="flexslider" style="border:1px solid #ccc; padding:5px;">

			  <ul class="slides">
                <?php if($row_defect->defectBanner1 !=''){ ?><li><img src="images/<?=$row_defect->defectBanner1;?>" alt="about" /></li><?php } ?>
                <?php if($row_defect->defectBanner2 !=''){ ?><li><img src="images/<?=$row_defect->defectBanner2;?>" alt="about" /></li><?php } ?>
                <?php if($row_defect->defectBanner3 !=''){ ?><li><img src="images/<?=$row_defect->defectBanner3;?>" alt="about" /></li><?php } ?>
              
			  </ul>
			</div><?php } ?>
    <!--<h4>Who we are</h4>-->
   <br> <p><?php echo $row_defect->defectcontent; ?></p><br>
			<script>
			$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    slideshowSpeed: "2000",
	height:"350px",
    direction: "left"
  });
});
</script>
  
  </div>
  
  <div class="col-md-3">
  <div class="log-main">
  <h4>PATIENTS LOGIN</h4>
  <div class="log-main-2">
  <p>User Name:<br><input type="text" class="input-field-1"></p>
  <p>Password:<br><input type="text" class="input-field-1"></p>
  <p><input type="button" value="Login" class="button-3"><input type="button" value="Register" class="button-3" onClick="location.href='register.html'"></p>
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

</body>
</html>