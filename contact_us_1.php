<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chariot || Contact Us</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="">
<meta name="robots" content="*">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">
<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/customstyle.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/services.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/watsapp.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900" rel="stylesheet">
</head>
<body>
  <div id="page">
 	<?php require_once("inc/header.php");?>
	<!--end header-->
	<?php require_once("inc/watapp.php");?>
    <div class="page-heading">
		<div class="container">
			<div class="row" style="margin-left: 0px;">
				<div class="col-xs-12">
					<div class="page-title">
						<h2>Contact Us</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BEGIN Main Container -->  
	<br><br>
  <div class="main-container col2-right-layout" id="contact_us">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div id="messages_product_view"></div>
          <form action="#" id="contactForm" method="post">
            <div class="static-contain">
              <fieldset class="group-select">
                <ul>
                  <li id="billing-new-address-form">
                    <fieldset class="">
                      <ul>
                        <li>
                          <div class="customer-name">
                            <div class="input-box name-firstname">
                              <label for="name"><em class="required">*</em>Name</label>
                              <br>
                              <input name="name" id="name" title="Name" value="" class="input-text required-entry" type="text">
                            </div>
                            <div class="input-box name-firstname">
                              <label for="email"><em class="required">*</em>Email</label>
                              <br>
                              <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text">
                            </div>
                          </div>
                        </li>
                        <li>
                          <label for="telephone">Phone Number</label>
                          <br>
                          <input name="telephone" id="telephone" title="Telephone" value="" class="input-text" type="text">
                        </li>
                        <li>
                          <label for="comment"><em class="required">*</em>Comment</label>
                          <br>
                          <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                        </li>
                      </ul>
                    </fieldset>
                  </li>
                  <p class="require"><em class="required">* </em>Required Fields</p>
                  <input type="text" name="hideit" id="hideit" value="" style="display:none !important;">
                  <div class="buttons-set">
                    <button type="submit" title="Submit" class="button submit"><span><span>Submit</span></span></button>
                  </div>
                </ul>
              </fieldset>
            </div>
          </form>
        </div>
        <!--col-right sidebar--> 
      </div>
      <!--row--> 
    </div>
    <!--main-container-inner--> 
  </div>
	<br><br>
  <!-- For version 1,2,3,4,6 -->
	<?php require_once("inc/footer.php");?>
  <!-- End For version 1,2,3,4,6 -->
</div>
<!--page-->
<!-- Mobile Menu-->
<?php require_once("inc/mobile_menu.php");?>
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
</body>
</html>