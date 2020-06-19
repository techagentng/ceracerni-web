<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Smarty - Multipurpose + Admin</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- 
			MATERIAL DESIGN 
			Required: material.min.css before essentials.css
		-->
		<link href="assets/plugins/mdl/material.indigo-blue.min.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />


		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- DEMO - THIS PAGE ONLY -->
		<link href="assets/css/demo-menu-blue.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/myGrid.css" rel="stylesheet" type="text/css" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations
		
		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/_smarty/boxed_background/1.jpg"

		enable-materialdesign 	= enable material design js library
	-->
	<body class="smoothscroll enable-animation enable-materialdesign">

		<!-- wrapper -->
		<div id="wrapper" class="mdl-shadow--4dp">

			<!-- 
				+ OPTIONS
					.fullheight
					.halfheight
					.thirdheight
					.mobile-fullheight

					.parallax-slider 	= opacity on scroll down
			-->
			<section id="slider" class="thirdheight mobile-fullheight m-0 parallax-slider" style="background:url('demo_files/images/mdl-blue-min.jpg') center center;">

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						
						<div class="container text-center">
							<h1 class="m-0 fs-50 fw-300 wow fadeInUp" data-wow-delay="0.4s">Smarty <b class="fw-600">Material</b> Design</h1>
							<p class="lead font-lato fs-30 wow fadeInUp" data-wow-delay="0.7s">power of google material</p>

							<div class="mt-20">
								<a href="#explore-slideto" class="btn btn-default mdl-js-button mdl-js-ripple-effect btn-lg wow fadeInUp scrollTo fw-300" data-offset="160" data-wow-delay="1.5s">EXPLORE COMPONENTS</a>
							</div>
						</div>

					</div>
				</div>

				<span class="overlay dark-0"><!-- dark overlay [0 to 9 opacity] --></span>

			</section>
			<!-- -->





			<!-- -->
			<section class="mdl-shadow--4dp">
				<div class="container">


					<div class="row">

						<div class="col-md-3 col-sm-3">

						<?php include('inc/sidebar.php');?>
                             
					</div><!-- end row -->

                      <div class="col-md-9 col-sm-9">
					     <div class="row">
							<div class="col-md-12 myGrid">

                              <div class="item1">
							    <img src="gridImg/African-Baba.jpg" class="">
							  </div>
							  
							  <div class="item1">
							    <img src="" class="">
							  </div>
							  
							  <div class="item1">
							    <img src="" class="">
							  </div>
                               
							   <div class="item1">
							     <img src="" class="">
							  </div>

							</div>
						</div>
					  </div>
				</div>
			</section>
			<!-- / -->












			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-8">

							<!-- Footer Logo -->
							<img class="footer-logo footer-2" src="assets/images/_smarty/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

							<hr />

							<div class="row">
								<div class="col-md-6 col-sm-6">

									<!-- Newsletter Form -->
									<p class="mb-10">Subscribe to Our <strong>Newsletter</strong></p>

									<form id="newsletterForm" action="php/newsletter.php" method="post">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
											<input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" required="required">
											<span class="input-group-btn">
												<button class="btn btn-info mdl-js-button mdl-js-ripple-effect" type="submit">Subscribe</button>
											</span>
										</div>
									</form>
									<!-- /Newsletter Form -->
								</div>

								<div class="col-md-6 col-sm-6 hidden-xs-down">

									<!-- Social Icons -->
									<div class="ml-50 clearfix">

										<p class="mb-10">Follow Us</p>
										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
											<i class="icon-linkedin"></i>
											<i class="icon-linkedin"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>

									</div>
									<!-- /Social Icons -->

								</div>
								
							</div>



						</div>

						<div class="col-md-4">

							<h4 class="letter-spacing-1">CONTACT US</h4>

							<!-- CONTACT MESSAGES -->
							<p id="alert_success" class="alert alert-success alert-mini">Message sent! Thank You!</p>
							<p id="alert_failed" class="alert alert-danger alert-mini">Message not sent!</p>
							<p id="alert_mandatory" class="alert alert-danger alert-mini">Please, complete all mandatory fields</p>

							<!-- CONTACT FORM -->
							<form class="validate" method="post" action="php/contact.php">
								
								<input type="text" value="" placeholder="Name*" maxlength="100" class="form-control required" name="contact[name]" />
								<input type="email" value="" placeholder="Email*" data-msg-email="Please enter a valid email address." class="form-control required" name="contact[email]" />
								<textarea maxlength="5000" placeholder="Message*" rows="3" class="form-control required" name="contact[message]"></textarea>
								<input type="submit" value="SUBMIT MESSAGE" class="btn btn-info mdl-js-button mdl-js-ripple-effect" />

							</form>
							<!-- /CONTACT FORM -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="list-inline inline-links mobile-block float-right m-0">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Contact</a></li>
						</ul>

						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>



		<!-- JAVASCRIPT FILES -->
		<script>var plugin_path = 'assets/plugins/';</script>
		<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>

		<script src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async src="demo_files/styleswitcher/styleswitcher.js"></script>
	</body>
</html>