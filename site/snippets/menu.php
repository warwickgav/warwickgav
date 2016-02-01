<a class="menu-btn" id="toggleMenu">
	<i class="icon icon-menu"></i><span class="sr-only">Menu</span>
</a>
<a class="menu-close" id="closeMenu">
	<i class="icon icon-close"></i><span class="sr-only">Close</span>
</a>
<div class="site-nav">
	<nav id="Menu" role="navigation">
		<ol class="nav main-menu">
			<?php foreach ($pages->visible() as $p): ?>
				<li<?php e($p->isOpen(), ' class="active"') ?>>
					<a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
				</li>
			<?php endforeach ?>
		</ol>
	</nav>
</div>
