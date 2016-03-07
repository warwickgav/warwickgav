<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="site-content" role="main">
	<div class="page-wrap">
		<div class="case-study-page">
			<div class="case-study-header" style="background-image: url('<?php echo $page->uid() ?>/<?php echo $page->lead() ?>');">
				<span class="date"><?php echo $page->project_date() ?></span>
				<h1 class="title"><?php echo $page->title()->html() ?></h1>
				<span class="project-details"><?php echo $page->details() ?></span>
			</div>
			<div class="case-study-intro">
				<div class="container">
					<div class="grid">
						<div class="grid-col grid-col--span-all grid-col--lg-one-half">
							<div class="columns">
								<h4>Project Brief</h4>
								<?php echo kirbytext($page->intro()) ?>
							</div>
						</div>
						<div class="grid-col grid-col--span-all grid-col--lg-one-half">
							<div class="columns">
								<h4>Responsibilities & deliverables</h4>
								<?php echo kirbytext($page->responsibilities()) ?>
							</div>
						</div>
					</div>
					<?php if ($page->link()): ?>
					<div class="columns project-link">
						<div class="btn-container">
							<a class="btn btn-action" target="_blank" href="<?php echo $page->link() ?>">Visit the site</a>
						</div>
					</div>
					<?php endif ?>
				</div>

			</div>
			<div class="case-study-content">
				<?php echo kirbytext($page->text()) ?>
				<div class="content">
					<?php snippet('contact-me') ?>
				</div>
				<div class="hr"></div>
			</div>
			<nav class="pagination">
				<?php if ($prev = $page->prevVisible()): ?>
					<a class="prev" href="<?php echo $prev->url() ?>">
						<span class="pagination-entry-name"><?php echo $page->prev()->title() ?></span>
						<span class="pagination-label">Older</span>
						<i class="icon icon-chevron-left"></i>
					</a>
				<?php endif ?>
				<?php if ($next = $page->nextVisible()): ?>
					<a class="next" href="<?php echo $next->url() ?>">
						<i class="icon icon-chevron-right"></i>
						<span class="pagination-entry-name"><?php echo $page->next()->title() ?></span>
						<span class="pagination-label">Recent</span>
					</a>
				<?php endif ?>
			</nav>
		</div>
	</div>
</main>

<?php snippet('footer') ?>