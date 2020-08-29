<?php
include "./includes/session.php";
include "./includes/DB.php";

 $DB = new clsITXDBTr($dbhost, $dbuname, $dbpwd, $dbname, False);
 
if($_GET['url']){

$url=mysql_real_escape_string($_GET['url']);

 	    $query_article ="SELECT t.*,t1.menuName FROM akar_tbl_articles t,akar_tbl_menu t1 WHERE t.articleStatus = 1 AND t.articleCategory = t1.menuId AND t.articleAlias='$url'";
		$res_article = $DB->doSQL($query_article);
		$row_article = mysql_fetch_object($res_article);
		$count=mysql_num_rows($res_article);
		$artcatId = $row_article->articleCategory;
		$htitle = $row_article->articleTitle;
}

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
    <div class="container">
<div class="row">
	<div class="col-md-12">
		<h1 class="inner-page"><?=$htitle?></h1>
		<?php echo $row_article->articlecontent; ?>		


		<?php if($url == 'about-us'){ ?>

    <!-- Team section starts -->


	<h1 class="inner-page">TEAM</h1>
	<div class="row">
    <?php
			$SQL_team="SELECT * FROM akar_tbl_people ORDER BY peopleOrder ASC";
			$result_team=$DB->doSQL($SQL_team);
			if(mysql_num_rows($result_team)>0){
		  while($row_people=mysql_fetch_object($result_team)){
	?>
    
            <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="team-member">
                <div class="volunteer-thumb"><?php if($row_people->peopleImage !=''){ ?><img src="images/<?=stripslashes($row_people->peopleImage)?>" alt="<?=stripslashes($row_people->peopleName)?>" class="img-fullwidth img-responsive" /><?php }else{ ?><img src="images/people.png" alt="<?=stripslashes($row_people->peopleName)?>" class="img-fullwidth img-responsive" /><?php } ?></div>
                <div class="bg-lighter text-center pt-20">
                  <div class="member-biography">
                    <h3 class="mt-0"><?=stripslashes($row_people->peopleName)?></h3>
                    <p><?=stripslashes($row_people->peopleQualification)?></p>
	
                  </div>
                
                </div>
              </div>
            </div>
            
            <?php }} ?>
		  
		  </div>
<?php
	$SQL_list="SELECT * FROM akar_tbl_documents";
	$result_list=$DB->doSQL($SQL_list);
	$row_donorlist = mysql_fetch_object($result_list);
?>
<div class="row" style="border:1px solid #ccc; padding:8px 2px; margin:4px;">
	 <div class="col-sm-12"><h1 class="inner-page"><a href="downloads/<?php echo $row_donorlist->documentName; ?>" target="_blank"><?php echo $row_donorlist->documentTitle; ?></a></h1></div></div><br>

    <?php } ?>

</div>
</div>
</div><br><br>

   
  </div>
  <!-- end main-content -->
 
  <!-- Footer -->
    <?php include 'footer.php'; ?>
	</div>
</body>
</html>