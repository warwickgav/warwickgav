<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="canonical" href="<?php echo $page->url() ?>">
	<meta property="og:site_name" content="<?php echo $site->title()->html() ?>">
	<meta property="og:title" content="<?php echo $page->title()->html() ?>">
	<meta property="og:url" content="<?php echo $page->url() ?>">
	<meta property="og:type" content="website">
	<meta itemprop="name" content="<?php echo $page->title()->html() ?>">
	<meta itemprop="url" content="<?php echo $page->url() ?>">
	<meta name="twitter:title" content="<?php echo $page->title()->html() ?>">
	<meta name="twitter:url" content="<?php echo $page->url() ?>">
	<meta name="twitter:card" content="summary">
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<script src="https://use.typekit.net/pcg6ehm.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<link rel="stylesheet" href="/assets/css/vendor/jquery.fancybox.css">
	<!-- custom css -->
	<?php foreach ($page->files()->filterBy('extension', 'css') as $css): ?>
		<?php echo css($css->url()) ?>
	<?php endforeach ?>



</head>

<body class="">
	<header>
		<div class="container">
			<div class="top">
				<div class="logo">
					<h2 class="brand">1/133 Alexander Street</h2> <span>South Yarra, VIC 3141</span>
				</div>
				<a class="menu-btn" id="toggleMenu">
					<i class="fa fa-reorder"></i><span class="sr-only">Menu</span>
				</a>
				<a class="menu-close" id="closeMenu">
					<i class="fa fa-close"></i><span class="sr-only">Close</span>
				</a>
			</div>
			<nav id="Menu" role="navigation" class="main-nav">
				<ol>
					<li><a href="#about">About</a></li>
					<li><a href="#features">Features</a></li>
					<li><a href="#location">Location</a></li>
					<li><a href="#gallery">Gallery</a></li>
					<li><a href="#floorplan">Floorplan</a></li>
					<li><a href="#contact">Contact Us</a></li>
				</ol>
				<div class="btn-container">
					<a class="btn btn-action-ghost" href="#contact">Make an Enquiry</a>
				</div>
			</nav>
		</div>
	</header>
	<main>
		<div class="hero">
			<div class="container">
				<figure><img src="/content/labs/1-contemporary/hero.jpg" width="1200" height="640"></figure>
				<div class="selling-point-group">
					<div class="selling-point sp-bed"><img src="/content/labs/1-contemporary/images/bed-icon.png" width="50" height="37"><span>3</span></div>
					<div class="selling-point sp-bath"><img src="/content/labs/1-contemporary/images/bath-icon.png" width="48" height="50"><span>3</span></div>
					<div class="selling-point sp-car"><img src="/content/labs/1-contemporary/images/car-icon.png" width="55" height="38"><span>3</span></div>
				</div>
			</div>
		</div>
		<section class="header-section">
			<div class="container">
				<div class="hr"></div>
				<h1>Elegant contemporary living</h1>
			</div>
		</section>
		<section id="about" class="content-section">
			<div class="container">
				<h3>About</h3>
				<div class="content">
					<p>Overlooking the Yarra River with a north facing terrace and 25m lap pool, this new 3 bedroom apartment is superbly finished and rich in detail. Enter via the lift from the 3 car basement garage or through the elegant marble lobby for guests.</p>
					<p>North facing, the apartment's large living areas are flooded in natural light.</p>
				</div>
			</div>
		</section>
		<section id="features" class="content-section">
			<div class="container">
				<h3>Features</h3>
				<div class="content">
					<div class="content-col">
						<ul class="list-plus">
							<li>Automated blinds and lights</li>
							<li>Touch screen interface</li>
							<li>Hidden in ceiling speakers</li>
							<li>Surround sound system</li>
							<li>Security alarm</li>
							<li>High end video intercom</li>
							<li>Zoned air-conditioning</li>
							<li>Electric coil floor heating</li>
						</ul>
					</div>
					<div class="content-col">
						<ul class="list-plus">
							<li>Italian bathroom fittings</li>
							<li>Access control (in lift)</li>
							<li>Pietra Grigio Marble</li>
							<li>Miele kitchen appliances</li>
							<li>Integrated refrigerator</li>
							<li>Integrated dishwasher</li>
							<li>European light fittings</li>
							<li>American Oak Feature Wall</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="location" class="content-section">
			<div class="container">
				<h3>Location</h3>
				<figure><img src="/content/labs/1-contemporary/map.jpg" width="1201" height="417"></figure>
				<div class="content">
					<p>Located close to the beating heart of Melbourne this peaceful pocket, with it’s perfect views and elegant surroundings, enjoy a lifestyle many aspire to. Plus it’s only a short walk from the shopping, culture, cafés, and restaurants of Chapel Street.</p>
				</div>
				<div class="btn-container">
					<a class="btn btn-action" href="//www.domain.com.au/suburb-profile/south-yarra-vic-3141">Discover South Yarra <i class="fa fa-external-link"></i></a>
				</div>
			</div>
		</section>
		<section id="gallery" class="content-section">
			<div class="container">
				<h3>Gallery</h3>
				<div class="gallery">
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/front.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/front-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/living.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/living-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/dining.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/dining-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/kitchen.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/kitchen-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/study.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/study-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/outdoor-dining.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/outdoor-dining-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/bedroom.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/bedroom-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/pool.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/pool-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/kids-living.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/kids-living-thumb.jpg" width="300" height="300" />
					</a>
					<a class="gallery-img fancybox" rel="group" data-fancybox-href="/content/labs/1-contemporary/images/garage.jpeg">
						<div class="overlay"></div>
						<img src="/content/labs/1-contemporary/images/garage-thumb.jpg" width="300" height="300" />
					</a>
				</div>
			</div>
		</section>
		<section id="floorplan" class="content-section">
			<div class="container">
				<h3>Floorplan</h3>
				<div class="btn-container">
					<a class="btn btn-action fancybox" data-fancybox-href="/content/labs/1-contemporary/images/floorplan.gif">View Floorplan</a>
				</div>
			</div>
		</section>
		<section id="contact" class="content-section">
			<div class="container">
				<h3>Contact Us</h3>
				<div class="content">
					<p>Andrew Baines
						<br><span>0418 328 407</span> <br><a href="mailto:abaines@kayburton.com.au">abaines@kayburton.com.au</a>
					</p>
					<p>Mark McKenzie
						<br><span>0457 727 552 </span><br>
						<a href="mailto:mmckenzie@kayburton.com.au">mmckenzie@kayburton.com.au</a>
					</p>
					<form class="form-stack">
						<div class="control-group">
							<label class="control-label">First Name</label>
							<input class="form-control" type="text">
						</div>
						<div class="control-group">
							<label class="control-label">Surname</label>
							<input class="form-control" type="text">
						</div>
						<div class="control-group">
							<label class="control-label">Phone</label>
							<input class="form-control" type="text">
						</div>
						<div class="control-group">
							<label class="control-label">Email</label>
							<input class="form-control" type="email">
						</div>
						<div class="control-group">
							<label class="control-label">Message</label>
							<textarea class="form-control form-control-textarea" rows="8">Hi Andrew, Please send me more information about the property, 1/133 Alexander Street South Yarra, VIC 3141.</textarea>
						</div>
						<div class="btn-container">
							<a class="btn btn-action" href="">Submit Enquiry</a>
						</div>
					</form>
				</div>
			</div>
		</section>
		<section class="social-section">
			<div class="container">
				<div class="social-group">
					<div class="social-left">
						<h2>Get a second opinion.<br>Share this property with your partner, family or friends.</h2>
					</div>
					<div class="social-right">
						<div class="social-icons">
							<a href="//facebook.com"><i class="fa fa-facebook-square"></i></a>
							<a href="//twitter.com"><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-envelope"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="content-section related-properties">
			<div class="container">
				<div class="hr"></div>
				<h2>Find the perfect property</h2>
				<div class="property-grid">
					<div class="property-grid-item">
						<div class="property-grid-inner">
							<a class="property-grid-img" href="//kayburton.com.au/">
								<img src="/content/labs/1-contemporary/images/related-property-1.jpg">
							</a>
							<div class="property-grid-content">
								<div class="property-grid-header">
									<h4>183/350 St Kilda Road,<br> Melbourne VIC 3004</h4>
								</div>
								<div class="property-grid-info">
									<div class="property-info"><img src="/content/labs/1-contemporary/images/bed-icon-sm.png" width="25" height="19"><span>3 Beds</span></div>
									<div class="property-info"><img src="/content/labs/1-contemporary/images/bath-icon-sm.png" width="25" height="26"><span>2 Baths</span></div>
									<div class="property-info"><img src="/content/labs/1-contemporary/images/car-icon-sm.png" width="25" height="18"><span>2 Parking</span></div>
								</div>
								<div class="property-grid-footer">
									<a href="//kayburton.com.au/">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="property-grid-item">
						<div class="property-grid-inner">
							<a class="property-grid-img" href="//kayburton.com.au/">
								<img src="/content/labs/1-contemporary/images/related-property-2.jpg">
							</a>
							<div class="property-grid-content">
								<div class="property-grid-header">
									<h4>1/55 Davis Avenue,<br> South Yarra  VIC 3141</h4>
								</div>
								<div class="property-grid-info">
									<div class="property-info"><img src="/content/labs/1-contemporary/images/bed-icon-sm.png" width="25" height="19"><span>2 Beds</span></div>
									<div class="property-info"><img src="/content/labs/1-contemporary/images/bath-icon-sm.png" width="25" height="26"><span>2 Baths</span></div>
									<div class="property-info"><img src="/content/labs/1-contemporary/images/car-icon-sm.png" width="25" height="18"><span>3 Parking</span></div>
								</div>
								<div class="property-grid-footer">
									<a href="//kayburton.com.au/">Learn More</a>
								</div>
							</div>
						</div>

					</div>
					<div class="property-grid-item">
						<div class="property-grid-inner">
							<a class="property-grid-img" href="//kayburton.com.au/">
								<img src="/content/labs/1-contemporary/images/related-property-3.jpg">
							</a>
							<div class="property-grid-content">
								<div class="property-grid-header">
									<h4>15 Howitt Street,<br> South Yarra  VIC 3141</h4>
								</div>
								<div class="property-grid-info">
									<div class="property-info"><img src="/content/labs/1-contemporary/images/bed-icon-sm.png" width="25" height="19"><span>3 Beds</span></div>
									<div class="property-info"><img src="/content/labs/1-contemporary/images/bath-icon-sm.png" width="25" height="26"><span>2 Baths</span></div>
									<div class="property-info"><img src="/content/labs/1-contemporary/images/car-icon-sm.png" width="25" height="18"><span>2 Parking</span></div>
								</div>
								<div class="property-grid-footer">
									<a href="//kayburton.com.au/">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer class="bottom">
		<div class="bottom-left">
			A property represented by<br>
			<img src="/content/labs/1-contemporary/images/kayandburton-logo.jpg" width="224" height="31">
		</div>
		<div class="bottom-right">
			For more properties like this visit <a href="//kayandburton.com.au">www.kayandburton.com.au <i class="fa fa-external-link"></i></a>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- custom javascript -->
	<?php foreach ($page->files()->filterBy('extension', 'js') as $js): ?>
		<?php echo js($js->url()) ?>
	<?php endforeach ?>

</body>
