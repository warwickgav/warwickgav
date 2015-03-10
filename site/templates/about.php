<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="site-content" role="main">

	<div class="page-lead">
		<div class="content-wrapper">
			<div class="lead-group">
				<span class="subtitle">Human</span>
				<h1 class="page-title"><?php echo $page->title()->html() ?></h1>
			</div>
		</div>
	</div>

	<div class="page-content">

		<div class="wrap">

			<h6 class="subtitle">Contents</h6>

			<article>

				<?php echo $page->text()->kirbytext() ?>

			</article>

			<hr>

		</div>

	</div>

</main>

<?php snippet('footer') ?>
