<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="site-content" role="main">
	<div class="page-content">
		<div class="content">
			<h1 class="page-title"><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
