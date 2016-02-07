<?php snippet('head') ?>
<?php snippet('header') ?>
<main class="site-content" role="main">
	<div class="page-wrap">
		<div class="page-lead">
			<div class="container">
				<h1 class="page-title"><?php echo $page->title()->html() ?></h1>
			</div>
		</div>
		<div class="page-header">
			<h2>Latest Work</h2>
		</div>
		<div class="page-content">
			<div class="content">
				<?php snippet('projects') ?>
				<div class="vr"></div>
				<div class="contact-me">
					Interested in adding me to your next project? <br><a href="mailto:warwick@warwickgav.com">Say hello</a>, and I’ll get back to you in 48 hours.
				</div>
			</div>
		</div>
	</div>

</main>
<?php snippet('footer') ?>
