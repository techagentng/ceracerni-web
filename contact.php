<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<title>Contact US</title>
		<meta name="description" content="Contact Us page" />
		<meta name="Author" content="Nnah Kenneth [www.techagentng.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="menu.css" rel="stylesheet" type="text/css">
		<link href="dropp-wavee.css" rel="stylesheet" type="text/css">
		<link href="harm-menu.css" rel="stylesheet" type="text/css" />
		<link href="imageModal.css" rel="stylesheet" type="text/css" />
		</head>
		<style>
		   .list-unstyled{
			   max-width: 95%;
			   line-height: 1.5;
			   font-size: 16px;
		   }
		   
			   aside{
				   display: none;
			   }
		</style>
	</head>

	<body class="smoothscroll enable-animation">
	<?php include('inc/menu-draw.php');?>
	<?php include('inc/menu.php');?>
	<?php include('inc/head-label.php');?>
	<!-- menu draw -->
		<!-- Mobile rapper -->

		<!-- wrapper -->
		<div id="wrapper">
			 <?php include('inc/aside-menu.php');?>  
		
			<!--All the form content of this page is in this section -->
					<!-- -->
			<section style="margin-top:55px;">
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div style="margin-bottom:25px;" class="col-md-9 col-sm-9">

							<h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>

							
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<form action="php/contact.php" method="post" enctype="multipart/form-data">
								<fieldset style="margin-bottom:20px;">
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Full Name *</label>
												<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:attachment">You can attach your choice design here</label>

												<!-- custom file upload -->
												<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-3 col-sm-3">

							<h2>Try Us Today</h2>

							<p>
								We meet our project deadlines we also derive pleasure in bringing a customers idea to live.
							</p>
							<p><a style="color:#0098da; font-size:1.5rem;" href="https://twitter.com/ceracerni/with_replies"><i class="fa fa-twitter"></i>See what people are saying</a></p>
							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> Seabreeze Estate, Lekki, Lagos.</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a style="color:#0098da; font-size:1.5rem;" href="tel:08061176101">08061176101</a></span>
								
							</p>

							<hr />

							<h4 style="color: white;"class="font300">Business Hours</h4>
							<p>
								<span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
								<span class="block"><strong>Saturday:</strong> 10am to 2pm</span>
								<span class="block"><strong>Sunday:</strong> Closed</span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->
			<!-- / -->
			<!-- /WORK -->	

	    <?php include('inc/footer.php');?>

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<script>
			function openNav() {
				document.getElementById("mySidebar").style.width = "100%";
				document.getElementById("main").style.marginLeft = "250px";
			}
			
			function closeNav() {
				document.getElementById("mySidebar").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";
			}
		</script>
		
		  <script type="text/javascript">
            $('aside').on('click', 'ul li', function(){
				$(this).addClass('active').siblings().removeClass('active')
			})
		  </script>

		<script>
			var totalNewRs5 = jQuery("div.rs5>div").length;
			jQuery("#rs5count").html(totalNewRs5);
		</script>
	</body>
</html>