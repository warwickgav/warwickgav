<?php snippet('head') ?>

<div class="section">
	<div class="controls">
		<a id="prev">Previous</a>
		<a id="next">Next</a>

	</div>
	<div class="section-container">
		<div id="slider" class="slider">
			<div class="slide one expanded" data-id="1">This is the first slide</div>
			<div class="slide two" data-id="2"> This is the second slide</div>
			<div class="slide three" data-id="3"> This is the third slide</div>
			<div class="slide four" data-id="4"> This is the fourth slide</div>
			<div class="slide five" data-id="5"> This is the fifth slide</div>
		</div>
	</div>
</div>

	<style>

		.section {
			height: 100vh;
			position: relative;
			overflow: auto;
		}
		.section-container {
			height: 100vh;
			padding: 100px 0;
			width: 100%;
			overflow: hidden;
		}
		.slide {
			padding: 20px;
			height: 100vh;
		}
		@media screen and (min-width: 960px){
			.slider {
				top: 0;
				position: absolute;
				overflow: hidden;
				width: 1000%;
				padding: 0;
				margin: 0;
				-webkit-transition: transform 500ms ease-in-out;
				-moz-transition: transform 500ms ease-in-out;
				-ms-transition: transform 500ms ease-in-out;
				-o-transition: transform 500ms ease-in-out;
				transition: transform 500ms ease-in-out;
			}
			.slide {
				float: left;
				width: 320px;
				height: 100vh;
				-webkit-transition: width 500ms ease-in-out;
				-moz-transition: width 500ms ease-in-out;
				-ms-transition: width 500ms ease-in-out;
				-o-transition: width 500ms ease-in-out;
				transition: width 500ms ease-in-out;
			}
		}
		.expanded {
			width: 940px;
		}
		.five {background: #152B3C}
		.one {background: #59B390}
		.two {background: #F0DDAA}
		.three {background: #E47C5D}
		.four {background: #E32D40}

		.controls {
			text-align: center;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			z-index: 10;
		}
		.controls a {
			display: inline-block;
			padding: 10px;
			margin: 0 5px;
			color: #fff;text-transform: uppercase;
		}
	</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php echo js('assets/scripts/app-min.js') ?>
<!-- custom javascript -->
<?php foreach ($page->files()->filterBy('extension', 'js') as $js): ?>
	<?php echo js($js->url()) ?>
<?php endforeach ?>
</body>

</html>
