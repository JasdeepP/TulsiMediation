<?php require_once('couch/cms.php');?>

<cms:template title='Plan & Pricing' icon='clipboard'> 

<cms:editable
    name='plan1'
    label='Plan Paragraph 1'
    type='text'
/>

<cms:editable
    name='plan2'
    label='Plan Paragraph 2'
    type='text'
/>

<cms:editable
	name='item1'
	label='Item 1'
	type='text'
/>
<cms:editable
	name='description1'
	label='Description 1'
	type='text'
/>
<cms:editable
	name='price1'
	label='Price 1'
	type='text'
/>

<cms:editable
	name='item2'
	label='Item 2'
	type='text'
/>
<cms:editable
	name='description2'
	label='Description 2'
	type='text'
/>
<cms:editable
	name='price2'
	label='Price 2'
	type='text'
/>

<cms:editable
	name='item3'
	label='Item 3'
	type='text'
/>
<cms:editable
	name='description3'
	label='Description 3'
	type='text'
/>
<cms:editable
	name='price3'
	label='Price 3'
	type='text'
/>

<cms:editable
	name='item4'
	label='Item 4'
	type='text'
/>
<cms:editable
	name='description4'
	label='Description 4'
	type='text'
/>
<cms:editable
	name='price4'
	label='Price 4'
	type='text'
/>

<cms:editable
	name='item5'
	label='Item 5'
	type='text'
/>
<cms:editable
	name='description5'
	label='Description 5'
	type='text'
/>
<cms:editable
	name='price5'
	label='Price 5'
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

							<!-- Content -->
								<section>
									<header class="major">
										<h1>Plan & Pricing</h1>
									</header>
									<h2><u>Plan</u></h2>
									<h4 style="font-size:20px">Our Vision in Mediation</h4>
									<p style="font-size:16px"><cms:show plan1/></p> 
									<p style="font-size:16px"><cms:show plan2/></p>
								<!--<hr class="major" />-->
								</section>

								<section>
									<!-- Table -->
									<h2><u>Pricing</u></h2>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><cms:show item1/></td>
														<td><cms:show description1/></td>															
														<td><cms:show price1/></td>
													</tr>
													<tr>
														<td><cms:show item2/></td>
														<td><cms:show description2/></td>															
														<td><cms:show price2/></td>
													</tr>
													<tr>
														<td><cms:show item3/></td>
														<td><cms:show description3/></td>															
														<td><cms:show price3/></td>
													</tr>
													<tr>
														<td><cms:show item4/></td>
														<td><cms:show description4/></td>															
														<td><cms:show price4/></td>
													</tr>
													<tr>
														<td><cms:show item5/></td>
														<td><cms:show description5/></td>															
														<td><cms:show price5/></td>
													</tr>
												</tbody>
													<!--<tfoot>
														<tr>
															<td colspan="2"></td>
															<td>100.00</td>
														</tr>
													</tfoot>-->
											</table>
										</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>-->

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php">Homepage</a></li>
										<li><a href="services.php">Services</a></li>
										<li><a href="planpricing.php">Plan & Pricing</a></li>
										<!--<li><a href="project.php">Projects</a></li>-->
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php COUCH::invoke();?>