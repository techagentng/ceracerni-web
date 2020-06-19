<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<title>Church Design Ceracerni</title>
		<meta name="description" content="" />
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
		</head>
		<style>
		   .list-unstyled{
			   max-width: 95%;
			   line-height: 1.5;
			   font-size: 16px;
		   }

		   /* Enlarge image when clicked*/
		   #myImg {
			border-radius: 5px;
			cursor: pointer;
			transition: 0.3s;
		   }
		  #myImg:hover {opacity: 0.7;}
          /* The Modal (background) */
			.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 100px; /* Location of the box */
			left: 30px;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
			}
			.modal-content{
				margin-left: 300px;
			}
			/* Caption of Modal Image */
			#caption {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
			text-align: center;
			color: #ccc;
			padding: 10px 0;
			height: 150px;
			}
			/* Add Animation */
			.modal-content, #caption {  
			-webkit-animation-name: zoom;
			-webkit-animation-duration: 0.6s;
			animation-name: zoom;
			animation-duration: 0.6s;
			}
			@-webkit-keyframes zoom {
			from {-webkit-transform:scale(0)} 
			to {-webkit-transform:scale(1)}
			}

			@keyframes zoom {
			from {transform:scale(0)} 
			to {transform:scale(1)}
			}
			/* The Close Button */
			.close {
			position: absolute;
			top: 55px;
			right: 160px;
			color: #f1f1f1;
			font-size: 40px;
			font-weight: bold;
			transition: 0.3s;
			}
			.close:hover,
			.close:focus {
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
			}
            /* 100% Image Width on Smaller Screens */
			@media only screen and (max-width: 700px){
			.modal-content {
				width: 100%;
			}
			}
			
			@media only screen and (max-width: 700px){
				.close {
						position: absolute;
						top: 15px;
						right: 35px;
						color: #f1f1f1;
						font-size: 40px;
						font-weight: bold;
						transition: 0.3s;
					}
			.modal-content{
				margin-left: 0;
			}
			}
		</style>
	</head>

	<body class="#">
	<?php include('inc/menu-draw.php');?>
    <?php include('inc/menu.php');?>
		<?php include('inc/head-label.php');?>
       <div class="body-wrapper grid">
		   <!-- Side bar -->
		   <?php include('inc/aside-menu.php');?>  
		  
		   <div style="margin-top:" class="man">
		   
		   <div class="img-grid">
		   <div class="image">
			 <img src="gridImg/behind-scene/African-BTS1.jpg" id="myImg" data-delay="0.5s" alt="Making - Africa">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/babryroom3.jpg" id="myImg" data-delay="0.5s" alt="Baby Room">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/Babyroom5.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/Babyroom7.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS8.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image" id="down">
			 <img src="gridImg/behind-scene/BTS-Arbico-2.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-African.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Arbico.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Art-Lovers.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-baba.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Babyroom.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Bakery.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Bar.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-floral.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Fun.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-FUN2.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Heineken.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-heineken1.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Heineken.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-heineken1.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-ICF.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-interior.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Law.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-OPT-ILLU.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Outdoor4.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Owners.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Polo-Club.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-Retro.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS1.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS-sch.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS2.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS3.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS5.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS6b.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS6.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS7.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/BTS9.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/Hotel-GG-BTS.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/doodle.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/c.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   <div class="image">
			 <img src="gridImg/behind-scene/Toystore.jpg" data-delay="0.5s" id="myImg">
		   </div>

		   </div>
			  <!-- FOOTER -->
 			<?php include('inc/footer.php');?>
			  <!-- /FOOTER -->
		   </div>
	   
	    </div>

		

		
		<!-- The Modal -->
		<div id="myModal" class="modal">
		<span class="close">&times;</span>
		<img class="modal-content" id="img01">
		<div id="caption"></div>
		</div>
		


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>
       
        
		
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>
	
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
		
		<!-- Enlarge Image JS -->
		<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById("myImg");
		var modalImg = document.getElementById("img0");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		modal.style.display = "none";
		}
</script>
	</body>
</html>