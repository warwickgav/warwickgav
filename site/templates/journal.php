<?php snippet('head') ?>
<?php snippet('header') ?>
<main class="site-content" role="main">
	<div class="page-wrap">
		<div class="page-header">
			<h1 class="page-title">
				<?php echo $page->title()->html() ?>
			</h1>
		</div>
		<div class="page-content">
			<div class="content">
				<?php snippet('journal-entries') ?>
			</div>
		</div>
	</div>
</main>
<?php snippet('footer') ?>

