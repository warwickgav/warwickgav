
		<footer class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<?php echo $site->copyright()->kirbytext() ?>
				</div>
			</div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<?php echo js('assets/scripts/app-min.js') ?>
		<!-- custom javascript -->
		<?php foreach ($page->files()->filterBy('extension', 'js') as $js): ?>
			<?php echo js($js->url()) ?>
		<?php endforeach ?>
	</body>

</html>