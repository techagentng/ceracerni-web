<?php include('inc/starter.html')?>
	
	<body class="smoothscroll enable-animation enable-materialdesign">

		<!-- wrapper -->
		<div id="wrapper" class="mdl-shadow--4dp">

			
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
			<section class="mdl-shadow--4dp">
				<div class="container">


					<div class="row">

						<div class="col-md-3 col-sm-3">

							<?php include('inc/sidebar.php');?>

						</div>



						<div class="col-md-9 col-sm-9">


							<div class="card card-default mb-100 mdl-shadow--2dp">
								<div class="card-block">
									<h2 class="fs-25 mt-0">
										<span>
											MATERIAL : <span class="fw-300">BADGES</span>
										</span>
									</h2>

									<p class="fs-16 fw-300">
										The Material Design Lite (MDL) badge component is an onscreen notification element. A badge consists of a small circle, typically containing a number or other characters, that appears in proximity to another object. A badge can be both a notifier that there are additional items associated with an object and an indicator of how many items there are.
									</p>
									<p class="fs-16 fw-300">
										You can use a badge to unobtrusively draw the user's attention to items they might not otherwise notice, or to emphasize that items may need their attention. 
									</p>


									<!-- pre code -->
									<div class="text-left mt-20">
										<a href="javascript:;" onclick="jQuery('#pre-help').slideToggle();" class="btn btn-sm btn-primary mdl-js-button mdl-js-ripple-effect">HOW TO ENABLE MATERIAL</a>
									</div>
									<div class="mt-10">
										<pre id="pre-help" class="text-left rad-0 text-black hide m-0">
										1. Add to html head, BEFORE essentials.css:
										<span class="text-danger">
										&lt;link href="assets/plugins/mdl/material.indigo-blue.min.css" rel="stylesheet"&gt;
										&lt;link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"&gt;
										</span>

										2. Add .enable-materialdesign class to body:
										<span class="text-success">&lt;body class="smoothscroll enable-animation <b>enable-materialdesign</b>"&gt;</span>


										<b>NOTE:</b> if you don't need 'Material Design Lite' javascript plugin, skip step 2 
										<span class="fs-11">(.enable-materialdesign class is used by assets/js/scripts.js to load MDL plugin from assets/plugins/mdl/)</span>

										<b>COLOR SCHEME:</b> We use blue as default color scheme.You can create your own material design color:
										<a href="https://getmdl.io/customize/index.html" target="_blank" rel="nofollow">Click to create your material design color</a>

										Credits: <a href="https://getmdl.io/index.html" target="_blank" rel="nofollow">MDL official</a>
										</pre>
									</div>
									<!-- /pre code -->

								</div>
							</div>




						</div>

					</div>



					</div>



				</div>
			</section>
			<!-- / -->

			<!-- FOOTER -->
		<?php include('inc/footer.php');?>
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