<?php snippet('head') ?>
<?php snippet('header') ?>

	<main class="site-content" role="main">

		<div class="page-content">
			<article class="entry entry-article entry-standard">
				<div class="entry-header">
					<time class="date" datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('M Y') ?></time>
					<h1 class="entry-title"><?php echo $page->title()->html() ?></h1>
					<div class="tags"><?php echo $page->tags() ?></div>
				</div>
				<div class="entry-content">
					<?php echo kirbytext($page->text()) ?>
				</div>
			</article>

			<!--			--><?php //$teaser = $pages->find('journal')->children()->visible()->flip()->shuffle()->first(); ?>
			<!--			<article class="entry entry-teaser">-->
			<!--				<time class="date" datetime="-->
			<?php //echo $page->date('c') ?><!--" pubdate="pubdate">--><?php //echo $page->date('M Y') ?><!--</time>-->
			<!--				<h3 class="entry-title"><a href="--><?php //echo $teaser->url() ?><!--">-->
			<?php //echo $teaser->title()->html() ?><!--</a></h3>-->
			<!--				<p class="entry-excerpt">--><?php //echo $teaser->excerpt() ?><!--</p>-->
			<!--			</article>-->

			<nav class="pagination">
				<?php if ($prev = $page->prevVisible()): ?>
					<a class="prev" href="<?php echo $prev->url() ?>">
						<i class="icon icon-chevron-left"></i>
						<span class="pagination-entry-name"><?php echo $page->prev()->title() ?></span>
						<span class="pagination-label">Previous</span>
					</a>
				<?php endif ?>
				<?php if ($next = $page->nextVisible()): ?>
					<a class="next" href="<?php echo $next->url() ?>">
						<span class="pagination-entry-name"><?php echo $page->next()->title() ?></span>
						<span class="pagination-label">Next</span>
						<i class="icon icon-chevron-right"></i>
					</a>
				<?php endif ?>
			</nav>
		</div>
	</main>

<?php snippet('footer') ?>