<?php include('inc/head.php');?>

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
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky clearfix">
				
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">
						
						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<a href="index.php"><button class="btn btn-primary" style="margin-left:60px; margin-top:26px;"><i class="fa fa-arrow-left"></i>Back to home</button></a>
						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->

							<!-- QUICK SHOP CART -->
				
							<!-- /QUICK SHOP CART -->

						</ul>
						<!-- /BUTTONS -->


						<!-- Logo -->
						<a class="logo pull-left" href="index.php">
							<img src="logo.png" alt="ceracerni logo" />
						</a>
						
						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								

							</nav>
						</div>
	
					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			<!-- -->
			<section class="height-450" style="background:url('assets/images/demo/wall2.jpg')">
			
				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						
						<div class="container text-center">
							
							<h1 class="nomargin size-50 weight-300 wow fadeInUp" data-wow-delay="0.4s"><span>Hi!</span> Excited already?</h1>
							<p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.7s">Over 595 stunned clients! <span class="theme-color weight-400 font-style-italic">Not yet</span> there is more</p>
						
						</div>

					</div>
				</div>

			</section>

			<!-- -->
			<section id="admin" class="alternate">
				<div class="container">
					
					<!-- Section Header -->
					<header class="section-header text-center">
						<div class="heading-title heading-line-double text-center">
							<h2>Current job board</h2>
						</div>
					</header>
					<!-- /Section Header -->
						
					<div class="row text-center wow fadeIn" data-wow-delay="0.1s">
					
						<div class="col-md-6 col-sm-6">
							<div class="margin-bottom-50 thumbnail">
								<a target="_blank" href="#">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/admin_html-min.jpg" alt="">
								</a>
							</div>

							<h4 class="size-20">
								<a target="_blank" href="#"><strong>EKO HOTEL PROJECT</strong></a>
							</h4>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="margin-bottom-50 thumbnail">
								<a href="javascript:;">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/admin_soon-min.jpg" alt="">
								</a>
							</div>

							<h2 class="size-20">
								<a href="javascript:;"><strong>EKO HOTEL PROJECT</strong></a>
							</h2>
						</div>

					</div>


				</div>
			</section>
			<!-- / -->

			<!-- -->
			<section id="multipage">
				<div class="container">
					
					<!-- Section Header -->
					<header class="section-header text-center">
						<div class="heading-title heading-line-double text-center">
							<h2>SEE MORE WALL DESIGN SAMPLES</h2>
						</div>
					</header>
					<!-- /Section Header -->

					<div class="row text-center margin-bottom-80 wow fadeIn">

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="">
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index.html">DEFAULT</a>
							</h4>

						</div>



						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-corporate-1.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="">
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-corporate-1.html">CORPORATE 1</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-corporate-2.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="">
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-corporate-2.html">CORPORATE 2</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-corporate-3.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="">
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-corporate-3.html">CORPORATE 3</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-corporate-4.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="">
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-corporate-4.html">CORPORATE 4</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-corporate-5.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-corporate-5.html">CORPORATE 5</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-corporate-6.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-corporate-6.html">CORPORATE 6</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-corporate-7.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-corporate-7.html"><span class="label label-default">NEW</span> CORPORATE 7</a>
							</h4>

						</div>

		
						
						
						
						
						
						
					</div>

				</div>
			</section>
			<!-- / -->


			
			
			
			

			<!-- -->
			<section id="onepage">
				<div class="container">
					
					<!-- Section Header -->
					<header class="section-header text-center">
						<div class="heading-title heading-line-double text-center">
							<h2>MORE CLIENT PROJECTS</h2>
						</div>
					</header>
					<!-- /Section Header -->

					<div class="row text-center margin-bottom-80 wow fadeIn">

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-default.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-default.html">ONEPAGE DEFAULT</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-image.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-image.html">ONEPAGE IMAGE</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-parallax.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-paxallax.html">ONEPAGE PARALLAX</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-revolution.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-revolution.html">ONEPAGE REVOLUTION</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-text-rotator.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-text-rotator.html">ONEPAGE TEXT ROTATOR</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-youtube.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-youtube.html">ONEPAGE YOUTUBE</a>
							</h4>

						</div>
						
						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-restaurant.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-restaurant.html">THEMATIC - RESTAURANT</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-education.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-education.html">THEMATIC - EDUCATION/COURSE</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-construction.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-construction.html">THEMATIC - CONSTRUCTION</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-medical.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-medical.html">THEMATIC - MEDICAL/DENTAL</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-wedding.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-wedding.html">THEMATIC - WEDDING</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-events.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-events.html">THEMATIC - EVENTS</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-fashion.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-fashion.html">THEMATIC - FASHION</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-church.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-church.html">THEMATIC - CHURCH</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-hosting.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-hosting.html"><span class="label label-success pull-right">new</span>THEMATIC - HOSTING</a>
							</h4>

						</div>

						<div class="col-md-3 col-sm-6 margin-bottom-60">

							<div class="margin-bottom-50">
								<a class="thumbnail" target="_blank" href="index-onepage-lawyer.html">
									<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/placeholder.jpg" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a target="_blank" href="index-onepage-lawyer.html"><span class="label label-success pull-right">new</span>THEMATIC - LAWYER</a>
							</h4>

						</div>

					
					</div>

				</div>
			</section>
			<!-- / -->


	    <?php include('inc/footer.php');?>

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->

		<script>
			var totalNewRs5 = jQuery("div.rs5>div").length;
			jQuery("#rs5count").html(totalNewRs5);
		</script>
	</body>
</html>