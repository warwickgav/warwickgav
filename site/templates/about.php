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
				<?php $page->content()->image() ?>
				<figure>
					<img src="<?php echo $page->cover()->url() ?>" alt="<?php echo $page->title() ?>" />
				</figure>
				<?php echo $page->text()->kirbytext() ?>
			</div>
		</div>
	</div>

</main>

<?php snippet('footer') ?>
