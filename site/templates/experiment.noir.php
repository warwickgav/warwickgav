<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="site-content" role="main">
	<div class="page-wrap">
		<article class="entry entry-article entry-standard">
			<div class="entry-header">
				<h1 class="entry-title"><?php echo $page->title()->html() ?></h1>
				<span class="project-details">Redesign of: <a href="http://noirsouthyarra.com.au/">noirsouthyarra.com.au</a></span>
			</div>
			<div class="entry-content">
				<div class="btn-container center"><a class="btn btn-action" href="/content/labs/2-noir-apartments-redesign/noir-apartments-redesign.jpg" target="_blank">View Larger Version</a></div>
				<br>
				<figure><img src="/content/labs/2-noir-apartments-redesign/noir-apartments-redesign.jpg" width="1634" height="3274"></figure>
			</div>
		</article>
	</div>
</main>





<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<?php echo $site->copyright()->kirbytext() ?>
		</div>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php echo js('assets/scripts/app-min.js') ?>

</body>

</html>
