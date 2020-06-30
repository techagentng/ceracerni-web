<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<title>Natural African Design Ceracerni</title>
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
	   <div class="heading">
			   <h1>African Design</h1>
		   </div>
		   <!-- Side bar -->
		   <?php include('inc/aside-menu.php');?>  
		   
		   <div class="main">
		   
		   <div class="img-grid">
		   <div class="image">
			 <img src="gridImg/African-Baba.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/African-Elephant.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/African2.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/animal.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/African.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>

		   <div class="image" id="down">
			 <img src="gridImg/Floral-Pattern.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/Heineken-Women.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>

		   <div class="image">
			 <img src="gridImg/Heineken.jpg" data-delay="0.5s"  class="myImg" id="foto">
		   </div>
		   </div>
			  
		   </div>
	        <!-- FOOTER -->
			   <?php include('inc/footer.php');?>
		       <!-- /FOOTER -->
	    </div>

		  <!-- Modal image html -->
		  <?php include('inc/imgModal.php');?>

		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>
       
        
		
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="modal-script.js"></script>
	
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
				
	</body>
</html>