<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Travel Designs -ceracerni</title>
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
		<link href="menu.css" rel="stylesheet" type="text/css" />
		<link href="harm-menu.css" rel="stylesheet" type="text/css" />

		<style>
		
		 .sideButton{
			width: 200px;
			height: 15px;
			background-color: transparent;
			display: block;
			border-radius: .5em;
			border: 2px solid #16f90b;
			padding-bottom: 50px;
			margin-top: 6em;
			position: absolute;
	   }
	   .sideButton:hover{
         border: 4px solid white;
	   }
	   .sideButton, p{
		   margin-left: 20%;
		   margin-top: 30px;
	   }
	   .sideButton img{
		 padding-left: 8em;		 
	   }
	 
	  .homeBtn{
		  position: absolute;
		  top: 10px;
		  color: #16f90b;
		  padding-left: 120px;
		  font-size: 1.5em;
		  line-height: 1.5em
	  }
	 
	   .bindA{
		   position: absolute;
		   left: 40px;
	   }
	   .list-group-item a:visited{
		   color: black;
	   }
	   .arrow-svg{
		   margin-left: 30px;
	   }
	   @keyframes anim1{
		   from{
			   transform: translateY(-100px);
				opacity: 0;
		   }
		  to {
			  transform: translateY(0);
			  opacity: 1;
		  }
	   }
		</style>
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
              <?php include('inc/menu.php');?>
			  
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
						<div class="bindA">
						
							<a href="index.php" class="sideButton"><svg xmlns="http://www.w3.org/2000/svg" class="arrow-svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M41.13219,48.11969c-0.88687,0.05375 -1.72,0.44344 -2.32469,1.10188l-35.31375,36.77844l35.31375,36.77844c0.84656,0.90031 2.10969,1.27656 3.30563,0.98094c1.19594,-0.29563 2.15,-1.20938 2.48594,-2.39188c0.34937,-1.19594 0.02687,-2.4725 -0.84656,-3.34594l-27.42594,-28.58156h148.79344c1.23625,0.01344 2.39188,-0.63156 3.02344,-1.70656c0.61813,-1.075 0.61813,-2.39187 0,-3.46687c-0.63156,-1.075 -1.78719,-1.72 -3.02344,-1.70656h-148.79344l27.42594,-28.58156c1.00781,-1.00781 1.29,-2.52625 0.69875,-3.81625c-0.57781,-1.30344 -1.89469,-2.10969 -3.31906,-2.0425z"></path></g></g></svg></a>
<p class="homeBtn" >Home</p>
						</div>
				
						<div class="container text-center" style="padding-top:40px;">
							<h1 class="m-0 fs-50 fw-300 wow fadeInUp" data-wow-delay="0.4s">Ceracerni <b class="fw-600">Art</b> Gallery</h1>
						
							<div class="mt-20">
								<a href="#explore-slideto" class="btn btn-default mdl-js-button mdl-js-ripple-effect btn-lg wow fadeInUp scrollTo fw-300" data-offset="160" data-wow-delay="1.5s">EXPLORE DESIGNS</a>
							</div>
						</div>

					</div>
				</div>

				<span class="overlay dark-0"><!-- dark overlay [0 to 9 opacity] --></span>

			</section>

			<section class="mdl-shadow--4dp">
				<div class="container">


					<div class="row">

						<div class="col-md-3 col-sm-3">

						<?php include('inc/sideLeft.php');?>
                             
					</div><!-- end row -->

                      <div class="col-md-9 col-sm-9">
					     <div class="row">
						 <h2 style="text-align:center;">Travel Designs</h2>
							<div class="col-md-12 myGrid">

                              <div class="item1">
								<img src="gridImg/TRAVEL/Travel-1.jpg" data-delay="0.5s" id="foto" class="image anim">
								
							  </div>
							  
							  <div class="item1">
								<img src="gridImg/TRAVEL/Travel-2.jpg" data-delay="0.5s" id="foto" cl>
								
							  </div>
							  
							  <div class="item1">
								<img src="gridImg/TRAVEL/Travel-Oasis.jpg"  data-delay="0.5s" id="foto" class="image anim">
								
							  </div>			 
						</div>
					  </div>
				</div>
			</section>
			<!-- / -->
          </div>

		<!-- FOOTER -->
			<?php include('inc/footer.php');?>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>
       
		<script type="text/javascript" src="assets/js/menu.js"></script>
		<script>var plugin_path = 'assets/plugins/';</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
		<script src="assets/js/scripts.js"></script>
	     
		
		<!-- <script>
			const images = document.querySelectorAll('.anim');
			observer = new IntersectionObserver((entries) => {
				console.log(entries);
				entries.forEach(entry => {
					if(entry.intersectionRatio > 0){
				        entry.target.style.animation = `anim1 2s forwards ease-out`;
			        }else{
				        entry.target.style.animation = 'none';
			        }
			    });
			  });
    
			images.forEach( image =>{
				observer.observe(images)
			});
		</script> -->
		
	</body>
</html>