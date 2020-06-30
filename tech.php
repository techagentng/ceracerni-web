<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<title>Tech Wall Designs Ceracerni</title>
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
		<link href="imageModal.css" rel="stylesheet" type="text/css" />
		</head>
		<style>
		   .list-unstyled{
			   max-width: 95%;
			   line-height: 1.5;
			   font-size: 16px;
		   }
		</style>
	</head>

	<body class="">
	<?php include('inc/menu-draw.php');?>
	<?php include('inc/menu.php');?>
		<?php include('inc/head-label.php');?>
       <div class="body-wrapper grid">
		   <!-- Side bar -->
		   <?php include('inc/aside-menu.php');?>  
		   <div class="heading">
			   <h1>Tech Wall Designs</h1>
		   </div>
		   <div class="main">
		   
		   <div class="img-grid">
		   
		   <div class="image">
			 <img src="gridImg/TECH/Abstract1.jpg" class="myImg" data-delay="0.5s" class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/TECH/Abstract-2.jpg" class="myImg" data-delay="0.5s" class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/TECH/Tech.jpg" class="myImg" data-delay="0.5s" class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/TECH/Tech2.jpg" class="myImg" data-delay="0.5s" class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/TECH/Tech3.jpg" class="myImg" data-delay="0.5s" class="myImg" id="foto">
		   </div>

		   <div class="image" id="down">
			 <img src="gridImg/TECH/Tech4.jpg" class="myImg" data-delay="0.5s" class="myImg" id="foto">
		   </div>

		   
		   </div>
			 
		   </div>
	          	<!-- FOOTER -->
	   <?php include('inc/footer.php');?>
		<!-- /FOOTER -->
	    </div>

	
       <!-- The Modal -->
		<div id="myModal" class="modal">

		<!-- The Close Button -->
		<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

		<!-- Modal Content (The Image) -->
		<img class="modal-content" id="img01">

		<!-- Modal Caption (Image Text) -->
		<div id="caption"></div>
		</div>
				
	<!-- Modal image html -->
	<?php include('inc/imgModal.php');?>


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
		var img = $('.myImg');
		var modalImg = $("#img01");
		var captionText = document.getElementById("caption");
		$('.myImg').click(function(){
		modal.style.display = "block";
		var newSrc = this.src;
		modalImg.attr('src', newSrc);
		captionText.innerHTML = this.alt;
	});

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
        span.onclick = function() {
         modal.style.display = "none";
	}
	
	// Listen for outside click event
		window.addEventListener('click', clickOutside);

		// When the user clicks on <span> (x), close the modal
        function clickOutside(e) {
			if(e.target == myModal){
				modal.style.display = "none";
			}
         
	}
</script>	
	</body>
</html>