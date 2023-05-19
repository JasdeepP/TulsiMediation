<?php require_once('couch/cms.php');?>

<cms:template title='Home Page' icon='home'> 

<cms:editable
    name='welcometext'
    label='Welcome Text'
    type='text'
/>

<cms:editable
	name='welcomeimage'
	label='Welcome Image'
	type='image'
	show_preview='1'
	preview_height='180'
/>

<cms:editable
    name='section2heading'
    label='Section 2 Heading'
    type='text'
/>

<cms:editable
    name='growyourvision'
    label='Grow Your Vision'
    type='text'
/>

<cms:editable
    name='section3heading'
    label='Section 3 Heading'
    type='text'
/>

<cms:editable
    name='godcreatedhuman1'
    label='God Created Human 1'
    type='text'
/>

<cms:editable
    name='godcreatedhuman2'
    label='God Created Human 2'
    type='text'
/>

<cms:editable
	name='backgroundimage'
	label='Background Image'
	type='image'
	show_preview='1'
	preview_height='180'
/>

</cms:template>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Tulsi Mediation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<style>
        body {
            height: 2500px; /* Just for demonstration, adjust to your page height */
        }
    	</style>

	</head>
	<body class="is-preload" style="background-image: url('<cms:show backgroundimage/>');">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Tulsi Mediation</strong></a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1 align="center"><strong>Tulsi Mediation</strong></h1>
											<h3 style="font-size:42px" align="center">Welcome to our website</strong></h3>
										</header>
										<p style="font-size:16px"><span class="image left"><img src="<cms:show welcomeimage/>" alt="Handshake" style="width:250px;height:250px;"/></span><cms:show welcometext/></p>
										<p align="center"></p>
									</div>
									<!--<span class="image object">
										<img src="images/pic10.jpg" alt="Handshake" style="position:relative;width:400px;height:225px;justify-content:center;" />
									</span>-->
								</section>

								<section>
									<h2 style="font-size:45px" align="center"><cms:show section2heading/></h2>
									<p style="font-size:18px" align="center"><cms:show growyourvision/></p>
								</section>

								<section>
									<h2 style="font-size:45px" align="center"><cms:show section3heading/></h2>
									<p style="font-size:18px" align="center"><cms:show godcreatedhuman1/></p>
									<p style="font-size:18px" align="center"><cms:show godcreatedhuman2/></p>
								</section>



						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php">Homepage</a></li>
										<!--<li><a href="project.php">Projects</a></li>-->
										<li><a href="services.php">Services</a></li>
										<li><a href="planpricing.php">Plan & Pricing</a></li>
										<li><a href="bookonline.php">Book Online</a></li>
										<li><a href="careers.php">Careers</a></li>
										<li><a href="faq.php">FAQ</a></li>
										<li><a href="blog.php">Blog</a></li>

									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>About Us</h2>
									</header>
									<div class="mini-posts">
										<cms:pages masterpage='globals.php'>
	
										<h4 align="center">Welcome to our site</h4>
										<article>
											<img src="<cms:show aboutusimage/>" alt="" style="width:275px;height:150px;"/>
											<p><cms:show aboutustext/></p>
										</article>
										<article>
											<!--<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>-->
											<h4 align="center">Our Team</h4>
											<h5 align="center"><cms:show ourteamtitle/></h5>
											<p><cms:show ourteam/></p>
										</article>
										<article>
											<!--<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>-->
											<h4 align="center">Mr. C.D.Chhabhadia</h4>
											<p><cms:show chandu/></p>
										</article>
									</cms:pages>
									</div>
									<!--Redirect to another page (use more button)-->
									<ul class="actions">
										<li><a href="moreaboutus.php" class="button">More on About Us</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contact Us</h2>
									</header>
									<h4>Opening hours</h4>
									<ul>
										<li>Monday-Friday: 9am - 6pm</li>
										<li>Saturday: 10am - 2pm</li>
										<li>Sunday: Closed</li>
									</ul>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">chhabhadai@yahoo.com</a></li>
										<li class="icon solid fa-phone">(254) 733683600</li>
										<li class="icon solid fa-home">Shajanand building, next to Co-Operative Bank<br />
										Nyerere Road, Kisumu, Kenya</li>
									</ul>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5642.448008492684!2d34.768456662618945!3d-0.09135027672156643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa47e97d1c49f%3A0x742607d3facb373a!2sShajanand%20Holdings%20Limited!5e0!3m2!1sen!2ske!4v1682446713425!5m2!1sen!2ske" width="275" height="275" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Jasdeep S Panesar<br /> All rights reserved. 2023.</p>
								</footer>

						</div>
					</div>

			</div>

			<script>
        	window.addEventListener('scroll', function() {
            // Check if the user has reached the bottom of the page
            	if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                	// Prevent default scrolling behavior
               	event.preventDefault();
                event.stopPropagation();
            	}
       		 	});
    		</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php COUCH::invoke();?>