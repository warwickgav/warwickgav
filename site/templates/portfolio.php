<?php snippet('head') ?>
<?php snippet('header') ?>
<main class="site-content" role="main">
	<div class="page-wrap">
		<div class="page-lead">
			<div class="container">
				<h1 class="page-title"><?php echo $page->title()->html() ?></h1>
			</div>
		</div>
		<div class="page-content">
			<div class="content">
				<?php snippet('projects') ?>
				<?php snippet('contact-me') ?>
			</div>
		</div>
	</div>

</main>
<?php snippet('footer') ?>
