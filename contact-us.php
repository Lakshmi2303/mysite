<?php
include "./includes/session.php";
include "./includes/DB.php";
include "./includes/class.phpmailer.php";

 $DB = new clsITXDBTr($dbhost, $dbuname, $dbpwd, $dbname, False);

$url='contact-us';

 	    $query_article ="SELECT t.*,t1.menuName FROM akar_tbl_articles t,akar_tbl_menu t1 WHERE t.articleStatus = 1 AND t.articleCategory = t1.menuId AND t.articleAlias='$url'";
		$res_article = $DB->doSQL($query_article);
		$row_article = mysql_fetch_object($res_article);
		$count=mysql_num_rows($res_article);
		$artcatId = $row_article->articleCategory;
		$htitle = $row_article->articleTitle;
		
		
if($_POST['pat_action']=='patient'){

			$pat_name = $_POST['pat_name'];
			$pat_mobile = $_POST['pat_mobile'];
			$pat_email = $_POST['pat_email'];
			$pat_address = $_POST['pat_address'];
			$pat_city = $_POST['pat_city'];
			$pat_district = $_POST['pat_district'];
			$pat_state = $_POST['pat_state'];
			$pat_pin = $_POST['pat_pin'];
			$pat_message = $_POST['pat_message'];
			
			$pat_namesentby = $_POST['pat_namesentby'];
			$pat_mobilesentby = $_POST['pat_mobilesentby'];
			$pat_emailsentby = $_POST['pat_emailsentby'];
			$patoptradio = $_POST['patoptradio'];
			
			
   $str = "Name : $pat_name<br>Email : $pat_email<br>Phone : $pat_mobile<br>Address : $pat_address<br>City : $pat_city<br>District : $pat_district<br>State : $pat_state<br>Pin : $pat_pin<br>Message  : $pat_message<br><br><b>Enquiry sent by</b>Name : $pat_namesentby<br>Email : $pat_emailsentby<br>Phone : $pat_mobilesentby<br>$patoptradio";

					$mail = new PHPMailer();
					$mail->IsMail();
					$mail->WordWrap = 50;
					$mail->IsHTML(true);
					$mail->From = $pat_email;
					$mail->FromName = ucfirst($pat_name);
					$mail->AddAddress("aakarasha.office@gmail.com");
					$mail->Subject = "Patient Enquiry Request from $pat_name";
					$mail->Body =$str; 
							if($mail->Send()){
								header('Location:contact-us?msg=1');
								exit();
							}else{
								header('Location:contact-us?msg=2');
								exit();
							}
}


if($_POST['sp_action']=='sponsers'){

			$sp_name = $_POST['sp_name'];
			$sp_mobile = $_POST['sp_mobile'];
			$sp_email = $_POST['sp_email'];
			$sp_address = $_POST['sp_address'];
			$sp_city = $_POST['sp_city'];
			$sp_district = $_POST['sp_district'];
			$sp_state = $_POST['sp_state'];
			$sp_pin = $_POST['sp_pin'];
			$sp_message = $_POST['sp_message'];
			$spoptradio = $_POST['spoptradio'];
			
   $str = "Name : $sp_name<br>Email : $sp_email<br>Phone : $sp_mobile<br>Address : $sp_address<br>City : $sp_city<br>District : $sp_district<br>State : $sp_state<br>Pin : $sp_pin<br>Message  : $sp_message<br><br>$spoptradio";

					$mail = new PHPMailer();
					$mail->IsMail();
					$mail->WordWrap = 50;
					$mail->IsHTML(true);
					$mail->From = $sp_email;
					$mail->FromName = ucfirst($sp_name);
					$mail->AddAddress("aakarasha.office@gmail.com");
					$mail->Subject = "Sponsers Enquiry Request from $sp_name";
					$mail->Body =$str; 
							if($mail->Send()){
								header('Location:contact-us?msg=3');
								exit();
							}else{
								header('Location:contact-us?msg=4');
								exit();
							}
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

<script language="javascript" src="includes/common.js"></script>
<script language="JavaScript" type="text/JavaScript">
function doValidate(){
  
    var frm = document.patt_form;
	
        if(GenValidation(frm.pat_name, 'Name' , '', '') == 0)
		return false;
		
        if(GenValidation(frm.pat_mobile, 'Mobile' , '', '') == 0)
		return false;

		var phone = document.getElementById('pat_mobile').value;
		
		if(isNaN(phone))
		{
		alert("Enter Numbers Only in Phone Field");
		return false;
		}	
				
		if(GenValidation(frm.pat_address, 'Address' , '', '') == 0)
		return false;
					
        if(GenValidation(frm.pat_city, 'City' , '', '') == 0)
		return false;
		
        if(GenValidation(frm.pat_state, 'State' , '', '') == 0)
		return false;
		
       return true;
	   
}


function dospValidate(){
  
    var frm = document.sp_form;
	
        if(GenValidation(frm.sp_name, 'Name' , '', '') == 0)
		return false;
		
		var email = document.getElementById('sp_email').value;
		if(email == "")
		{
		alert("Please Enter Email");
		return false;
		}
		
		var x=document.forms["sp_form"]["sp_email"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		  {
		  alert("Not a valid e-mail address");
		  return false;
		  }
					
       return true;
	   
}
</script>
</head>
<body class="">
<div id="wrapper" class="clearfix">
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
	</div>

</div>
</div><br><br>

<style>
.akar-table-1 .tbl-1{ display:table; width:100% }
.akar-table-1 .row-1{ display:table-row;  }
.akar-table-1 .cell-1{ display:table-cell; vertical-align:top; }
.akar-table-1 .cell-1:first-child{ width:45%;}
.akar-table-1 .cell-1:last-child{ width:45%;}
@media screen and (max-width:768px){
.akar-table-1 .cell-1{ display:block; vertical-align:top; }
.akar-table-1 .cell-1:first-child{ width:100%;}
.akar-table-1 .cell-1:last-child{ width:100%; padding-top:25px;}

}
</style>


    <!-- Section: About  -->
    <section class="divider">
	
      <div class="container pt-0">
        
        <div class="row pt-10">
        
        
        <div class="akar-table-1">
            <div class="tbl-1">
                <div class="row-1">
                    <div class="cell-1">
                    	<div class="col-md-12">
          <h4 class="mt-0 mb-30 line-bottom">For Patients</h4>
          <!-- Google Map HTML Codes -->
		  
		  <form id="patt_form" name="patt_form" action="" method="post" novalidate="novalidate" onSubmit="return doValidate();">
              <?php
				if($_GET['msg']==1){
				echo 'Request Sent Successfuly'; }
				if($_GET['msg']==2){
				echo 'Request Not Sent'; }
			?>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="pat_name" name="pat_name" class="form-control" type="text" placeholder="Enter Name">
                  </div>
                </div>
				
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Mobile <small>*</small></label>
                    <input id="pat_mobile" name="pat_mobile" class="form-control" type="number" placeholder="Enter Mobile">
                  </div>
                </div>
				
               
              </div>  
<div class="row">
	 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email </label>
                    <input id="pat_email" name="pat_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                  </div>
                </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Address <small>*</small></label>
                    <textarea id="pat_address" name="pat_address" class="form-control  " type="text" placeholder="Enter Address" aria-required="true" style="height:44px;line-height:30px" ></textarea>
                  </div>
                </div>
</div>

<div class="row">
<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">City/Town <small>*</small></label>
                    <input id="pat_city" name="pat_city" class="form-control required email" type="text" placeholder="Enter City" aria-required="true">
                  </div>
                </div>
	 <div class="col-sm-6">
     
                  <div class="form-group">
                    <label for="form_email">District </label>
                    <input id="pat_district" name="pat_district" class="form-control required email" type="text" placeholder="Enter District" aria-required="true">
                  </div>
                </div>
				 
</div>

<div class="row">
<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">State <small>*</small></label>
                    <input id="pat_state" name="pat_state" class="form-control required email" type="text" placeholder="Enter State" aria-required="true">
                  </div>
                </div>
	 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Pin </label>
                    <input id="pat_pin" name="pat_pin" class="form-control required email" type="number" placeholder="Enter Pin" aria-required="true">
                  </div>
                </div>
				 
</div>

              
              

              <div class="form-group">
                <label for="form_name">Comments</label>
                <textarea id="pat_message" name="pat_message" class="form-control required" rows="5" placeholder="Enter Comments" aria-required="true"></textarea>
              </div>
              
              
              <h4>Enquiry sent by</h4>
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name</label>
                    <input id="pat_namesentby" name="pat_namesentby" class="form-control" type="text" placeholder="Enter Name">
                  </div>
                </div>
				
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Mobile</label>
                    <input id="pat_mobilesentby" name="pat_mobilesentby" class="form-control" type="number" placeholder="Enter Mobile">
                  </div>
                </div>
				
               
              </div>
              <div class="row">
	 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email</label>
                    <input id="pat_emailsentby" name="pat_emailsentby" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                  </div>
                </div>
				 <div class="col-sm-6">
                  
                </div>
</div>



 <div class="row">
	 <div class="col-sm-12">
                  <div class="form-group">
   <label class="radio-inline"><input type="radio" name="patoptradio" value="Self">Self </label>
<label class="radio-inline"><input type="radio" name="patoptradio" value="Doctor">Doctor </label>
<label class="radio-inline"><input type="radio" name="patoptradio" value="Care taker">Care taker</label>
<label class="radio-inline"><input type="radio" name="patoptradio" value="Other">Other</label>
                  </div>
                </div>
			
</div>
                           
              <div class="form-group">
                <input id="pat_action" name="pat_action" class="form-control" type="hidden" value="patient">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">SUBMIT</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">RESET</button>
              </div>
            </form>
         
          
          </div>
                    
                    </div>
                    <div class="cell-1" style="position:relative"><div style="position:absolute; height:100%; left:60px; top:0px; background:#ccc; width:1px;"></div></div>
                    <div class="cell-1">
                    	<div class="col-md-12">
            <h4 class="mt-0 mb-30 line-bottom">For Sponsers</h4>
            <!-- Contact Form -->
		  <form id="sp_form" name="sp_form" action="" method="post" novalidate="novalidate" onSubmit="return dospValidate();">
              <?php
				if($_GET['msg']==3){
				echo 'Request Sent Successfuly'; }
				if($_GET['msg']==4){
				echo 'Request Not Sent'; }
			?>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="sp_name" name="sp_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
				
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Mobile</label>
                    <input id="sp_mobile" name="sp_mobile" class="form-control" type="number" placeholder="Enter Mobile" required="">
                  </div>
                </div>
				
               
              </div>  
<div class="row">
	 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small> </label>
                    <input id="sp_email" name="sp_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_address">Address</label>
                    <textarea id="sp_address" name="sp_address" class="form-control  " type="text" placeholder="Enter Address" aria-required="true" style="height:44px;line-height:30px"></textarea>
                  </div>
                </div>
				 
</div>

<div class="row">
	           <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">City/Town </label>
                    <input id="sp_city" name="sp_city" class="form-control required email" type="text" placeholder="Enter City">
                  </div>
                </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">State</label>
                    <input id="sp_state" name="sp_state" class="form-control required email" type="text" placeholder="Enter State">
                  </div>
                </div>
                
</div>

<div class="row">
<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Country </label>
                    <input id="sp_district" name="sp_district" class="form-control required email" type="text" placeholder="Enter Country">
                  </div>
                </div>
	 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Pin</label>
                    <input id="sp_pin" name="sp_pin" class="form-control required email" type="number" placeholder="Enter Pin">
                  </div>
                </div>
				 
</div>

    <div class="row">
<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Organization </label>
                    <input id="sp_organization" name="sp_district" class="form-control required email" type="text" placeholder="Enter Organization">
                  </div>
                </div>
	 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_designation">Designation</label>
                    <input id="sp_pin" name="sp_pin" class="form-control required email" type="number" placeholder="Enter Designation">
                  </div>
                </div>
				 
</div>          
              

              <div class="form-group">
                <label for="form_name">Comments</label>
                <textarea id="sp_message" name="sp_message" class="form-control required" rows="5" placeholder="Enter Comments"></textarea>
              </div>
                            
  <div class="form-group"> 
  <div class="radio">
  <label><input type="radio" name="spoptradio" value="I would like to contribute"> I would like to contribute</label>
</div>
<div class="radio">
  <label><input type="radio" name="spoptradio" value="I request for more information"> I request for more information</label>
</div>
<div class="radio ">
  <label><input type="radio" name="spoptradio" value="I would like to volunteer my services"> I would like to volunteer my services </label>
</div>
<div class="radio">
  <label><input type="radio" name="spoptradio" value="Other"> Other</label>
</div>
</div>

              
              <div class="form-group">
                <input id="sp_action" name="sp_action" class="form-control" type="hidden" value="sponsers">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">SUBMIT</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">RESET</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
       
          </div>
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