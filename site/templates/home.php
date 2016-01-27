<?php snippet('head') ?>
<?php snippet('header') ?>

	<main class="site-content" role="main">

		<div class="intro">
			<div class="content-wrap">
				<h1 class="intro-body"><?php echo $page->text()->kirbytext() ?></h1>
			</div>
		</div>

		<div class="">
			<?php snippet('projects') ?>
		</div>

    </main>

<?php snippet('footer') ?>