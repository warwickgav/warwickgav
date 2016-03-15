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
						<ol>
							<li><a href="#strategy">01. Strategy & Planning</a></li>
							<li><a href="#production">02. Production</a></li>
							<li><a href="#evaluation">03. Evaluation & Refinement</a></li>
							<li><a href="#delivery">04. Delivery</a></li>
						</ol>
					</nav>
					<?php echo $page->text()->kirbytext() ?>
					<?php snippet('contact-me') ?>
				</div>
			</article>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
