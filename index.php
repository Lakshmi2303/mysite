<?php
include "./includes/session.php";
include "./includes/DB.php";
 $DB = new clsITXDBTr($dbhost, $dbuname, $dbpwd, $dbname, False);

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
    <!-- Section: About  -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-md-8">
              <p class="lead"><?php
		$query_article ="SELECT t.*,t1.menuName FROM akar_tbl_articles t,akar_tbl_menu t1 WHERE t.articleStatus = 1 AND t.articleCategory = t1.menuId AND t.articleAlias='home'";
		$res_article = $DB->doSQL($query_article);
		$row_article = mysql_fetch_object($res_article);
		echo $row_article->articlecontent;
?>                  

</p>
              
            </div>
			
			<div class="col-xs-12 col-md-4">
			<h2 style="margin-top:3px;">LIVES TRANSFORMED</h2>
			<div class="flexslider" style="border:1px solid #ccc; padding:5px;">

			             <ul class="slides">
<?php
		$query_homeanimation ="SELECT * FROM akar_tbl_homeanimation WHERE imageStatus=1 ORDER BY ImageOrder";
		$res_homeanimation = $DB->doSQL($query_homeanimation);
		while($row_homeanimation=mysql_fetch_object($res_homeanimation)){
?>
			 
				<li>
                  <img src="images/<?=$row_homeanimation->homeImage?>" alt="about" />
                </li>
                
                <?php } ?>
                
                
			  </ul>
              
				
			</div>
			<script>
			$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    slideshowSpeed: "2000",
	height:"350px",
    direction: "left",
	controlNav: false
  });
});
</script>

			<p style="font-weight:bold;margin-top:3px;">Typical surgeries performed at Aakar Asha Hospital.</p>
			
			
			</div></div>
        </div>
      </div>
    </section>

    <!-- Section: -->
    
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include 'footer.php'; ?>
  </div>

</body>
</html>