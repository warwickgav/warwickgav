<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="site-content" role="main">
	<div class="page-lead">
		<div class="container">
			<h1 class="page-title"><?php echo $page->title()->html() ?></h1>
		</div>
	</div>
	<div class="page-wrap">
		<div class="page-content">
			<article class="entry entry-article entry-standard">
				<div class="entry-content">
					<nav id="toc" class="table-of-contents">
						<h5 class="label">Table of Contents</h5>
						<ul>
							<li><a href="#strategy">Strategy & Planning</a></li>
							<li><a href="#production">Production</a></li>
							<li><a href="#evaluation">Evaluation & Refinement</a></li>
							<li><a href="#delivery">Delivery</a></li>
						</ul>
					</nav>
					<?php echo $page->text()->kirbytext() ?>
					<?php snippet('contact-me') ?>
				</div>
			</article>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
