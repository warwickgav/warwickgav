<?php snippet('head') ?>
<?php snippet('header') ?>

	<main class="site-content" role="main">

		<article class="entry entry-article">

			<div class="page-lead">
				<div class="content-wrapper">
					<div class="lead-group">
						<time class="date" datetime="<?php echo $page->date('c') ?>"><?php echo $page->short_date(); ?></time>
						<h1 class="entry-title"><?php echo $page->title()->html() ?></h1>
					</div>
				</div>
			</div>

			<div class="page-content">
				<?php echo kirbytext($page->text()) ?>
			</div>

		</article>

		<?php $teaser = $pages->find('portfolio')->children()->shuffle()->first(); ?>
		<article class="entry entry-teaser">
			<time class="date" datetime="<?php echo $teaser->date('c') ?>"><?php echo $teaser->short_date() ?></time>
			<h3 class="entry-title"><a href="<?php echo $teaser->url() ?>"><?php echo $teaser->title()->html() ?></a></h3>
			<p class="entry-excerpt"><?php echo $teaser->excerpt() ?></p>
			<hr>
		</article>

	</main>

<?php snippet('footer') ?>