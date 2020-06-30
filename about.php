<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<title>About Ceracerni</title>
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
	
		  .div{
			  font-size: 2rem;
			  color: white;
			  font-weight: 300;
			  text-align: justify;
			  background-color: purple;
		  }
		  .div2{
			  font-size: 2rem;
			  color: white;
			  font-weight: 300;
			  text-align: justify;
			  background-color: purple;		
		  }
		  .div2:hover{
			  color: white;
			  background-color: light-blue;
			  text-decoration: none;
		  }
		  .cimg img{
			margin-bottom: 2rem; 
			position: relative;
			width: 100%;
		  }
		  .vid{
			  position: relative;
			  height: 63%;
		  }
		  .vid iframe{
			position: absolute;
			top:0;
			left: 0;
			width: 100%;
			height: 100%;
		  }
		  .div:hover{
			  background-color: green;
			  color: white;
			  cursor: pointer;
		  }
		  .ref-container{
			  
			  display: grid;
			  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
			  padding: 0 5rem;
			  grid-gap: 2rem;
			  margin-bottom: 10px;
		  }
		 .about-wrap > h1{
			 color: white;
			 text-align: center;
		 }
	
		  /* media querries */
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
		  .vid{
			  position: relative;
			  height: 100%;
			  padding-bottom: 56.25%; 
		  }
		  .vid iframe{
			position: absolute;
			top:0;
			left: -30;
			width: 100%;
			height: auto;
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
				<p><span class="ftext">C</span>eraCerni is a fast growing wall design/mural outfit established in 2014 to cater to walls in any Industry. </p>
				<p>With specialties in abstract Wall Paintings, Floral Wall Murals, Cartoon Characters, Graffiti, and Wallpaper lookalike. Our designs comes in 2D, 3D, and even 5D perspectives.</p>
				<p>Our designs are applicable to the walls in your: BabyRooms, Schools, Salon, Fashion Houses, Restaurants, Dance Schools, Music Studios, Kitchen, Churches, Game Houses, Corporate Offices, Hotels, Living & Bedrooms, Indoor & outdoors, and Under Bridges/Parks. </p>
				<p>Check our home page for some of our clients.</p>
			</div>
		   </div>
		
		   <h1>OUR ONLINE PRESENCE OVER THE YEARS....</h1>
			<div class="ref-container">
				<div class="cimg">
				<img src="me.jpg" alt="">
				<a href="https://www.bellanaija.com/2019/12/twitter-user-job-contract/amp/" class="div div2">When Ceracerni got the Eko Hotel deal</a>
				</div>

				<div class="cimg vid2"><iframe src="https://www.youtube.com/embed/X4RBip8Zz-I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<a class="div div2">When Ceracerni painted with Big Brother Naija’s Tobi Bakre</a>
				</div>

				<div class="cimg vid2"><iframe  src="https://www.youtube.com/embed/T3zik6F88ac" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<a class="div div2">When Ceracerni was on a cover Ad for TVC</a>
				</div>

				<div class="cimg vid2"><iframe src="https://web.facebook.com/plugins/video.php?href=https%3A%2F%2Fweb.facebook.com%2Fceracerni%2Fvideos%2F295857221226532%2F&show_text=0& style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
					<a class="div div2">When Ceracerni was called to TVC station for a quick interview</a>
				</div>

				<div class="cimg vid2"><iframe src="https://www.youtube.com/embed/rbt4MbXq3iM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<a class="div div2">When Ceracerni was on the cover AD for Union Bank- 2017</a>
				</div>

				<div class="cimg vid2"><iframe src="https://www.youtube.com/embed/IGLV184P69U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<a class="div div2">When TVC came to visit Ceracerni on site</a>
				</div>
				
				<div class="cimg"><img src="sarrah-news.jpg" alt="sarrah-news">
				<a class="div div2">Ceracerni's first Feature on a National Newspaper 🗞 2014</a>
				</div>
				<div class="cimg"><img src="sarah-kissing.jpg" alt="">
				<a href="https://www.lindaikejisblog.com/2015/06/cera-cerni-designs-photos.html" class="div2">This was the first time Ceracerni was ever featured on any blog. And it was LindaIkejisBlog in 2015</a>
				</div>
				<div class="cimg"><img src="ynaija-feature.jpg" alt="">
				<a href="https://ynaija.com/profile-sarah-sanni-high-mural-ground/" class="div2">Ceracerni featured on Ynaija in 2016</a>
				</div>
				<div class="cimg"><img src="mtn.jpg" alt="">
				<a href="https://ynaija.com/profile-sarah-sanni-high-mural-ground/" class="div2">Ceracerni was Mtn yellow Woman Crush Wednesday in 2016</a>
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