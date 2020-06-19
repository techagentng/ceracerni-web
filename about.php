<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<title>Home Wall Designs Ceracerni</title>
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
		  .about-wrap{
			  background-color: red;
			  height: 100vh;
			  position: relative;
			  background: radial-gradient(circle, rgba(34,228,11,0.4937325271905637) 0%, rgba(34,228,11,1) 40%, rgba(0,173,239,1) 80%);
		  }
		  .about-grid{
			  display: grid;
			  grid-template-columns: 1fr 2fr; 
			  margin: 0 auto;
			  padding: 5rem 10rem;
		  }
		
		  .left{
			position: absolute;
			top: -80px;
			left: -80px;
			min-width: 20%;
			height: 50%;
			z-index: 1;
		  }
		  .right{
			position: absolute;
			top: -60px;
			left: -80px;
			min-width: 20%;
			height: 30%;
			z-index: 2;
		  }
		  .cerni-abt img{
			height: 100%;
			width: 100%;
			border-radius: 5px;
		  }
		  .cerni-abt{
			  min-width: 250px;
			  margin-left: auto;
		  }

		  .text-abt{
			background-color: white;
			text-align: center;
			min-width: 400px;
			margin-right: auto;
			padding: 12rem 5rem;
			border-radius: 5px;
		  }
		  .text-abt h1{
			font-size: 3vw;  
		  }
		  .text-abt p{
			  color: black;
			  text-align: justify;
		  }
		  @media only screen and (max-width: 736px){
			.cerni-abt{
			  display: grid;
			  grid-column: 1/3;
			  margin-left: auto;
			  width: 100%;
			  height: 100%;
		  }
		  .about-wrap{
			  width: 100%;
			  margin: 0 auto;
		  }
		  .cerni-abt img{
			  margin:0 auto;
			  width: 100%;
			  height: 100%;
			  
		  }
		  .text-abt{
			  min-width: 200px;
			  grid-column: 1/3;
			  height: 100%;
		  }
		  .about-grid .text-abt{
			padding: 40px;
			margin: 0 auto;
		  }
		  .text-abt h1{
			font-size: 3rem;
		  }
		  .ftext{
			font-size: 3rem;
		  }
		  .tabout{
			  color: #0c51ac;
		  }
		  .tcera{
			  color: #02f104;
		  }
		  .about-grid{
		    padding: 0;
		  }
		  .tcerni{
			  color: #a91bbd;
		  }

		  .left{
			position: absolute;
			top: -50px;
			left: -50px;
			min-width: 10%;
			height: 30%;
			z-index: 1;
		  }
		  .right{
			position: absolute;
			top: -40px;
			left: -60px;
			min-width: 10%;
			height: 20%;
			z-index: 2;
		  }
		} 
		</style>
	</head>

	<body class="">
	<?php include('inc/menu.php');?>
	<img src="pj.png" alt="splash-paint" class="left">
	<img src="p2.png" alt="splash-paint" class="right">
         <div class="about-wrap">

		   <div class="about-grid">
				<div class="cerni-abt">
				   <img src="mirror.jpeg" alt="ceracerni-image">
			</div>

			<div class="text-abt">
				<h1><span class="tabout">About</span> <span class="tcera">Cera</span> <span class="tcerni">Cerni</span></h1>
				<p><span class="ftext">C</span>era Cerni is a fast growing wall design/mural outfit established in 2014 to cater to walls in any Industry. </p>
				<p>With specialties in abstract Wall Paintings, Floral Wall Murals, Cartoon Characters, Graffiti, and Wallpaper lookalike. Our designs comes in 2D, 3D, and even 5D perspectives.</p>
				<p>Our designs are applicable to the walls in your: BabyRooms, Schools, Salon, Fashion Houses, Restaurants, Dance Schools, Music Studios, Kitchen, Churches, Game Houses, Corporate Offices, Hotels, Living & Bedrooms, Indoor & outdoors, and Under Bridges/Parks. </p>
				<p>Check our home page for some of our clients.</p>
			</div>
		   </div>
		<!-- FOOTER -->
	   <?php include('inc/footer.php');?>
		<!-- /FOOTER -->
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
				
	</body>
</html>